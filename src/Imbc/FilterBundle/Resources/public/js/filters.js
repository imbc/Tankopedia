
// TODO: turn this into a jQuery plugin

/*
 * Variables in global scope
 */

var selections = {};
var genericErrorMessage = 'An error occurred in the filter module. Please refresh the page.';

/*
 * Script entry (page OnLoad event)
 */

$( function()
{
    addExportButton();

    // Store data for all options on page load
    $( 'select.imbc-filter' ).each( function()
    {
        storeSelectorOptions( this );
    });

    // Set filter state on page load
    $( 'select.imbc-filter' ).each( function()
    {
        setFilterStateForSelectorChoice( this );
    });
    // Define an OnChange event handler that will change the filter state
    $( 'select.imbc-filter' ).change( function()
    {
        setFilterStateForSelectorChoice( this, true );
    });

    // reset related select element to default value
    $( 'a.imbc-filter-reset' ).click( function() {
        resetSelectors( this );
    });

    // Make sure all mandatory selectors have a value selected
    $( '#reportfilter-submit' ).click( checkMandatorySelectors );


    // treat the <select> on partner selected as a combo box.
//    $( 'select.vendorshiftregion' ).change( function()
//    {
//        if( $( this ).find( ':selected' ).attr( 'value' ) === 'partner' )
//        {
//            $( 'select.breakdown' ).chosen();
//        }
//        else
//        {
//            $( 'select.chzn-done' ).removeAttr( 'style', '' )
//                                   .removeClass( 'chzn-done' )
//                                   .data( 'chosen', null )
//                                   .next().remove() ;
//        }
//    });
});

function resetSelectors( selectorDOMElement ) {
    // reset the nearest select element
    var selector = $( selectorDOMElement ).siblings( 'select.imbc-filter' )[0];
    $( selector ).val( null );
    // get the classes of element that needs to be reset
    var reset = $( selector ).attr( 'data-reset' );
    reset = reset ? reset.split( ' ' ) : [ ];
    // set the state for this selector
    setFilterStateForSelectorChoice( selector, true );
    $.each( reset, function() {
        var element = $( '.' + this );
        element.val( null );
        setFilterStateForSelectorChoice( element, true );
    });
}

/**
 * Make sure all mandatory selectors have a value selected
 *
 * @return boolean
 */
function checkMandatorySelectors()
{
    var mandatories = [ ];
    $( 'select.imbc-filter' ).each( function()
    {
        if( $( this ).attr( 'data-mandatory' ) == 'mandatory' )
        {
            if( !$( this ).val() )
            {
                var label = $( this ).attr( 'data-label' );
                var message = label ? 'Select ' + label + '!' : genericErrorMessage;
                noty({
                    text: message,
                    type: 'warning',
                    layout: 'center',
                    timeout: 2000,
                });
            }
            mandatories.push( $( this ).val() ? true : false );
        }
    });
    for( var it in mandatories )
    {
        if( !mandatories[it] ) return false;
    }
    return true;
}

function exportFunction( DOMElement, processed )
{
    var url = $( DOMElement ).attr( 'url' );
    if( processed === false ) return false;
    else
    {
        $.ajax({
            url: url,
            type: 'POST',
            data: { export: processed },
        });
        return true;
    }
}

/**
 * Store any selector option that is not already stored
 *
 * @param DOMElement selectorDOMElement
 */
function storeSelectorOptions( selectorDOMElement )
{
    // Get name of selector
    var name = $( selectorDOMElement ).attr( 'name' );
    // Create index for it in global storage object if there isn't one yet
    if( !selections[name] ) selections[name] = {};
    // Store contents
    selections[name] = $( selectorDOMElement ).contents().clone();
}

/**
 * Set state of entire filter for a given selector choice
 *
 * @param DOMElement selectorDOMElement
 * @param {boolean} init setting the function to read the reset values or not
 */
function setFilterStateForSelectorChoice( selectorDOMElement, init )
{
    var valueSelected = $( selectorDOMElement ).val() ? true : false;
    init = typeof init !== 'undefined' ? init : false;
    // Reset values depending on SELECT elements
    if( init ) {
        var reset = $( selectorDOMElement ).attr( 'data-reset' );
        reset = reset ? reset.split( ' ' ) : [ ];
    }

    // Enable/disable depending SELECT elements
    var enables = $( selectorDOMElement ).attr( 'data-enables' );
    enables = enables ? enables.split( ' ' ) : [ ];
    for( var it in enables )
    {
        var resets = ( init ) ? ( $.inArray( enables[it], reset ) ? true : false ) : true ;
//            var resets = $.inArray( enables[it], reset ) ? true : false;
        if( $( 'select.' + enables[it] ).attr( 'name' ) )
        {
            if( $( 'select.' + enables[it] ).prop( 'disabled' ) || !valueSelected )
            {
                toggleSelectorDisableAttribute( 'select.' + enables[it], !valueSelected, resets );
                // If enabling this element, check if it only has one option and select that
//                if( valueSelected )
//                    testForAndSelectSingleOption( 'select.' + enables[it] );
            }
        }
    }
    // Enable/disable incompatible SELECT elements
    var disables = $( selectorDOMElement ).attr( 'data-disables' );
    disables = disables ? disables.split( ' ' ) : [ ];
    for( var it in disables )
    {
        // valueSelected
        var resets = ( init ) ? ( $.inArray( enables[it], reset ) ? true : false ) : valueSelected ;
        if( $( 'select.' + disables[it] ).attr( 'name' ) )
        {
            toggleSelectorDisableAttribute( 'select.' + disables[it], valueSelected, resets );
            // If enabling this element, check if it only has one option and select that
//            if( !valueSelected )
//                testForAndSelectSingleOption( 'select.' + disables[it] );
        }
    }

    // Limit or reset OPTION tags of related SELECT elements
    // based on limited-by on Selected Element and closest limited-by-optgroup
    var limits = $( selectorDOMElement ).attr( 'data-limits' );
    limits = limits ? limits.split( ' ' ) : [ ];
    for( var it in limits )
    {
        var data = {'name': limits[it]};
        if( valueSelected )
        {
            data['limited-by'] = trim( $( ':selected', selectorDOMElement ).text() );
            var optgroup = $( ':selected', selectorDOMElement ).closest( 'optgroup' );
            var tagName = $( optgroup ).prop( 'tagName' );
            if( tagName && 'OPTGROUP' == tagName.toUpperCase() )
            {
                data['limited-by-optgroup'] = trim( optgroup.attr( 'data-name' ) );
            }
        }
        limitSelectionTo( data );
    }
}

/**
 * Set current options for a selector according to limit from another selector
 *
 * @param array data (keys: name, limited-by, limited-by-optgroup)
 */
function limitSelectionTo( data )
{
    // Get reference to selector
    var selector = $( 'select.' + data['name'] );
    // Get reference for the options of this selector from global storage object
    var selection = selections[data['name']];
    // Discard the current selector options:
    $( 'select.' + data['name'] ).empty();
    // Copy all selector options from global storage object back to selector
    if ( selection ) selector.append( selection.clone() );
    // Remove any option that is supposed to be limited but doesn't match the limiter
    selector.find( 'optgroup, option' ).filter( function()
    {
        if( 1 != this.nodeType ) return true;
        var limitedBy = $( this ).attr( 'data-limited-by' );
        if( limitedBy && data['limited-by'] )
        {
            if( -1 == limitedBy.indexOf( data['limited-by'] ) ) return true;
        }
        var limitedByOptgroup = $( this ).attr( 'data-limited-by-optgroup' );
        if( limitedByOptgroup && data['limited-by-optgroup'] )
        {
            if( -1 == limitedByOptgroup.indexOf( data['limited-by-optgroup'] ) )
                return true;
        }
        return false;
    }).remove();
//    testForAndSelectSingleOption( 'select.' + data['name'] );
}

/**
 * Enable/disable and style selector (and reset if required):
 *
 * @param DOMElement selector
 * @param boolean disable
 * @param boolean reset
 */
function toggleSelectorDisableAttribute( selector, disable, reset )
{
    toggleEventHandlerOverlay( selector, disable );
    var color = disable ? 'rgb(221, 221, 221)' : 'rgb(85, 85, 85)';
    var cursor = disable ? 'default' : 'pointer';
    $( selector )
            .prop( 'disabled', disable ? 'disabled' : false )
            .css( 'color', color );
    $( selector )
            .siblings( 'a.imbc-filter-reset' )
            .css({ 'color': color, 'cursor': cursor });
    if( reset ) $( selector ).val( null );
}

/**
 * Toggle click handling overlay for disabled selectors
 *
 * @param DOMElement selector
 * @param boolean disabled
 */
function toggleEventHandlerOverlay( selector, disabled )
{
    var className = 'overlay-' + $( selector ).attr( 'name' );
    if( disabled )
    {
        createEventHandlerOverlay( selector, className );
    }
    else
    {
        $( '.' + className ).remove();
    }
}

/**
 * Create click handling overlay for disabled selectors
 *
 * @param DOMElement selector
 * @param string className
 */
function createEventHandlerOverlay( selector, className )
{
    var overlay = $( '<div />' );
    overlay.css( 'position', 'absolute' );
    var a = $( selector ).siblings( 'a' );
    var position = $( selector ).position();
    var marginLeft = parseInt( $( selector ).css( 'margin-left' ) );
    overlay.css( 'left', position.left + marginLeft );
    var margintop = parseInt( $( selector ).css( 'margin-top' ) );
    overlay.css( 'top', position.top + margintop );
    overlay.css( 'width', 8*2 + parseInt( $( selector ).css( 'width' )) + parseInt( $( a ).css( 'width' ) ) );
    overlay.css( 'height', 8 + parseInt( $( selector ).css( 'height' ) ) );
    overlay.addClass( className );
    var notyMessage = createNotyMessage( selector );
    overlay.click( function()
    {
        if( 1 == overlay.attr( "data-noty" ) ) return;
        overlay.attr( "data-noty", 1 );
        noty( {
            text: notyMessage,
            type: 'warning',
            layout: 'center',
            timeout: 2000,
            callback: {
                afterClose: function() {
                    overlay.attr( "data-noty", "0" );
                },
            },
        });
    });
    $( selector ).after( overlay );
}

/**
 * Create user-facing disabled-selector-clicked message from current filter state
 *
 * @param DOMElement selector
 * @return string
 */
function createNotyMessage( selector )
{
    var dataDependencies = $( selector ).attr( 'data-dependencies' );
    if( dataDependencies )
    {
        var dependencies = dataDependencies.split( ' ' );
        for( var it in dependencies )
        {
            var label = $( 'select.' + dependencies[it] ).attr( 'data-label' );
            if( !label ) continue;
            return 'Select ' + label + '!';
        }
    }
    var dataDisables = $( selector ).attr( 'data-disables' );
    if( dataDisables )
    {
        var disables = dataDisables.split( ' ' );
        for( var it in disables )
        {
            var disabledSelector = $( 'select.' + disables[it] );
            if( !disabledSelector.val() ) continue;
            var label = disabledSelector.attr( 'data-label' );
            if( !label ) continue;
            return 'Unselect ' + label + '!';
        }
    }
    return genericErrorMessage;
}

function addExportButton()
{
    var exportChkBox = $( '#reportfilter-checkbox' );
    var submitBtn = $( '#reportfilter-submit' );
    if ( exportChkBox.length )
    {
        if( dataLength < 1 )
        {
            $( exportChkBox ).attr( 'disabled', 'disabled' );
            $( '#reportfilter-chkbox' ).attr( 'title', 'You need to filter the data before you can export it.' );
            $( submitBtn ).closest( 'div' ).find( 'label' ).attr( 'style', 'color: #BABFC2;' );
        }
        $( exportChkBox ).attr( 'checked', false );
        $( exportChkBox ).click( function() {
            var chkbox = $( this );
            var label = $( chkbox ).is( ':checked' ) ? 'Export Records' : 'Filter Records';
            var icon = $( chkbox ).is( ':checked' ) ? 'formbutton export' : 'formbutton filter';
            var name = $( chkbox ).is( ':checked' ) ? 'export' : 'filter';
            $( submitBtn ).val( label );
            $( submitBtn ).attr( 'class', icon );
            $( submitBtn ).attr( 'name', name );
        });
    }
}

/**
 * Pre-select option if it is the only one in selector
 *
 * @param DOMElement selector
 */
function testForAndSelectSingleOption( selector )
{
    var numberOfOptions = $( selector ).find( 'option' ).length;
    var numberOfEmptyOptions = $( selector ).find( 'option.empty' ).length;
    if( 1 != numberOfOptions - numberOfEmptyOptions ) return;
    var option = $( selector ).find( 'option:last' );
    $( selector ).val( $( option ).attr( 'value' ) );
}
