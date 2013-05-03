<?php

namespace Imbc\UserBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ImbcUserBundle extends Bundle {
	public function getParent() {
		return 'FOSUserBundle';
	}
}
