<?php
	if(is_active_sidebar('primary-sidebar')){
		dynamic_sidebar('primary-sidebar');
	}else if(is_active_sidebar('secondary-sidebar')){
			echo "secondary-sidebar";
			dynamic_sidebar('secondary-sidebar');
	}
?>