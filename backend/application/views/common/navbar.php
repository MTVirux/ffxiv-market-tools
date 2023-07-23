<style>
    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
        .dropdown-menu li{ position: relative; 	}
        .nav-item .submenu{ 
            display: none;
            position: absolute;
            left:100%; top:-7px;
        }
        .nav-item .submenu-left{ 
            right:100%; left:auto;
        }
        .dropdown-menu > li:hover{ background-color: #f1f1f1 }
        .dropdown-menu > li:hover > .submenu{ display: block; }
    }	
    /* ============ desktop view .end// ============ */

    /* ============ small devices ============ */
    @media (max-width: 991px) {
    .dropdown-menu .dropdown-menu{
        margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
    }
    }	
    /* ============ small devices .end// ============ */
</style>
<?php
$this->load->helper('frontend_maker');
echo get_navbar($this->config->item('navbar_structure'));