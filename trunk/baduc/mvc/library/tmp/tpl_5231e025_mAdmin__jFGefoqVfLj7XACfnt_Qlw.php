<?php 
function tpl_5231e025_mAdmin__jFGefoqVfLj7XACfnt_Qlw_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 149 */; ?>
<div class="row-fluid footer">
			<?php /* tag "span" from line 150 */; ?>
<span class="label pull-right copyright">&#169; 2012 SPN</span>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_5231e025_mAdmin__jFGefoqVfLj7XACfnt_Qlw_Menu(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="menu">
		<?php /* tag "ul" from line 90 */; ?>
<ul class="nav nav-list">
			<?php /* tag "li" from line 91 */; ?>
<li class="nav-header">THIẾT LẬP</li>																																						
			<?php 
/* tag "li" from line 92 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Category'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 93 */ ;
if (null !== ($_tmp_1 = ('/setting/category'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 94 */; ?>
<i class="icon-beer"></i>DANH MỤC MÓN<?php /* tag "span" from line 94 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->CategoryAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 97 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Domain'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 98 */ ;
if (null !== ($_tmp_1 = ('/setting/domain'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 99 */; ?>
<i class="icon-map-marker"></i>KHU VỰC QUÁN<?php /* tag "span" from line 99 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->DomainAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 102 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Supplier'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 103 */ ;
if (null !== ($_tmp_1 = ('/setting/supplier'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 104 */; ?>
<i class="icon-truck"></i>NHÀ CUNG CẤP <?php /* tag "span" from line 104 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->SupplierAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 107 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='User'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 108 */ ;
if (null !== ($_tmp_1 = ('/setting/user'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 109 */; ?>
<i class="icon-user"></i>NGƯỜI DÙNG <?php /* tag "span" from line 109 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->UserAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 112 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Customer'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 113 */ ;
if (null !== ($_tmp_1 = ('/setting/customer'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 114 */; ?>
<i class="icon-user"></i>KHÁCH HÀNG <?php /* tag "span" from line 114 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->CustomerAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 117 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Unit'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 118 */ ;
if (null !== ($_tmp_1 = ('/setting/unit'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 119 */; ?>
<i class="icon-tag"></i>ĐƠN VỊ TÍNH <?php /* tag "span" from line 119 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->UnitAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 122 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Employee'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 123 */ ;
if (null !== ($_tmp_1 = ('/setting/employee'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 124 */; ?>
<i class="icon-user"></i>NHÂN VIÊN<?php /* tag "span" from line 124 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->EmployeeAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 127 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='TermCollect'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 128 */ ;
if (null !== ($_tmp_1 = ('/setting/termcollect'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 129 */; ?>
<i class="icon-tag"></i>DANH MỤC THU<?php /* tag "span" from line 129 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->TermCollectAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 132 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='TermPaid'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 133 */ ;
if (null !== ($_tmp_1 = ('/setting/termpaid'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 134 */; ?>
<i class="icon-tag"></i>DANH MỤC CHI<?php /* tag "span" from line 134 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->TermPaidAll, 'count')); ?>
</span> 
				</a>
			</li>
			<?php 
/* tag "li" from line 137 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Config'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 138 */ ;
if (null !== ($_tmp_1 = ('/setting/config'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 139 */; ?>
<i class="icon-gear"></i>CẤU HÌNH <?php /* tag "span" from line 139 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->ConfigAll, 'count')); ?>
</span>
				</a>
			</li>			
		</ul>
	</div><?php 
}

 ?>
<?php 
function tpl_5231e025_mAdmin__jFGefoqVfLj7XACfnt_Qlw_PageBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="pagination">
		<?php /* tag "ul" from line 82 */; ?>
<ul>
			<?php 
/* tag "li" from line 83 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->P = new PHPTAL_RepeatController($ctx->path($ctx->PN, 'getPages'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->P as $ctx->P): ;
if (null !== ($_tmp_1 = ($ctx->Page==$ctx->P->getId()?'disabled':'active'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 84 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->P, 'getURL')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->P, 'getName')); ?>
</a>
			</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		</ul>
	</div><?php 
}

 ?>
<?php 
function tpl_5231e025_mAdmin__jFGefoqVfLj7XACfnt_Qlw_LocationBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 68 */; ?>
<div class="row-fluid">			
			<?php /* tag "ul" from line 69 */; ?>
<ul class="span12 breadcrumb">
				<?php 
/* tag "li" from line 70 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Item = new PHPTAL_RepeatController($ctx->Navigation)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Item as $ctx->Item): ;
?>
<li>
					<?php 
/* tag "a" from line 71 */ ;
if (null !== ($_tmp_2 = ($ctx->Item[1]))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->Item[0]); ?>
</a> <?php /* tag "span" from line 71 */; ?>
<span class="divider">/</span>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				<?php /* tag "li" from line 73 */; ?>
<li class="active"><?php echo phptal_escape($ctx->Title); ?>
</li>
			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_5231e025_mAdmin__jFGefoqVfLj7XACfnt_Qlw_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 49 */; ?>
<div class="navbar navbar-inverse">
			<?php /* tag "div" from line 50 */; ?>
<div class="navbar-inner">
				<?php /* tag "a" from line 51 */; ?>
<a class="brand" href="/app">					
					<?php /* tag "img" from line 52 */; ?>
<img src="/data/images/logo/spn_kara.png" width="190" alt="logo"/>
					<?php /* tag "p" from line 53 */; ?>
<p style="font-size: 12px; margin-top:10px; margin-left:10px;">
						Hệ thống quản lý Karaoke Ba Đức
					</p>
				</a>
				<?php /* tag "p" from line 57 */; ?>
<p class="navbar-text pull-right">
					<?php /* tag "a" from line 58 */; ?>
<a class="navbar-link" href="/signout/load"><?php 
/* tag "span" from line 58 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()):  ;
?>
<span><?php echo phptal_escape(\MVC\Base\SessionRegistry::instance()->getCurrentUser()->getEmail()); ?>
</span><?php endif; ?>
</a>
				</p>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_5231e025_mAdmin__jFGefoqVfLj7XACfnt_Qlw_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "script" from line 37 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"></script>		
		<?php /* tag "script" from line 38 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap.min.js"></script>
		<?php /* tag "script" from line 39 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap-datepicker.js"></script>		
		
		<?php /* tag "script" from line 41 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap-datetimepicker.js"></script>
		<?php /* tag "script" from line 42 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap-datetimepicker.vi.js"></script>
	</span><?php 
}

 ?>
<?php 
function tpl_5231e025_mAdmin__jFGefoqVfLj7XACfnt_Qlw_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>	
		<?php /* tag "link" from line 26 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/bootstrap.min.css" media="screen"/>
		<?php /* tag "link" from line 27 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/madmin.css"/>
		<?php /* tag "link" from line 28 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/datepicker.css"/>
		<?php /* tag "link" from line 29 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/datetimepicker.css"/>
		<?php /* tag "link" from line 30 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/font-awesome.min.css"/>
	</span><?php 
}

 ?>
<?php 
function tpl_5231e025_mAdmin__jFGefoqVfLj7XACfnt_Qlw_IncludeMETA(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "title" from line 8 */; ?>
<title><?php echo 'Website hệ thống quản lý Karaoke Ba Đức'; ?>
</title>
		<?php /* tag "base" from line 9 */; ?>
<base href="http://baduc.quanly-karaoke.com"/>
		<?php /* tag "meta" from line 10 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<?php /* tag "meta" from line 11 */; ?>
<meta http-equiv="Pragma" content="no-cache"/>
		<?php /* tag "meta" from line 12 */; ?>
<meta http-equiv="Expires" content="-1"/>
		<?php /* tag "meta" from line 13 */; ?>
<meta http-equiv="Cache-Control" content="no-cache"/>
		<?php /* tag "meta" from line 14 */; ?>
<meta name="keywords" content="Website hệ thống quản lý Karaoke Ba Đức"/>
		<?php /* tag "meta" from line 15 */; ?>
<meta name="description" content="Website hệ thống quản lý Karaoke Ba Đức"/>
		<?php /* tag "meta" from line 16 */; ?>
<meta name="page-topic" content="Website hệ thống quản lý Karaoke Ba Đức"/>
		<?php /* tag "meta" from line 17 */; ?>
<meta name="Abstract" content="Website hệ thống quản lý Karaoke Ba Đức"/>
		<?php /* tag "meta" from line 18 */; ?>
<meta name="classification" content="Website hệ thống quản lý Karaoke Ba Đức"/>
		<?php /* tag "link" from line 19 */; ?>
<link rel="shortcut icon" type="image/png" href="/data/images/app/icon.png"/>
	</span><?php 
}

 ?>
<?php 
function tpl_5231e025_mAdmin__jFGefoqVfLj7XACfnt_Qlw(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "html" from line 1 */ ;
?>
<html lang="en" xml:lang="en">
<?php /* tag "body" from line 2 */; ?>
<body>
	<!-- ======================================================================== -->
	<!-- META TAG INCLUDE														  -->
	<!-- ======================================================================== -->
	
	<?php /* tag "span" from line 7 */; ?>

	
	<!-- ======================================================================== -->
	<!-- CASCADING STYLE SHEETS INCLUDE											  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 25 */; ?>

	
	<!-- ======================================================================== -->
	<!-- JAVASCRIPT INCLUDE														  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 36 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HEADER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 48 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LOCATION BAR															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 67 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LOCATION BAR															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 81 */; ?>

							
	<?php /* tag "div" from line 89 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FOOTER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 148 */; ?>
	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\Projects\WEBAPP\Business\quanly-karaoke.com\baduc\mvc\templates\mAdmin.xhtml (edit that file instead) */; ?>