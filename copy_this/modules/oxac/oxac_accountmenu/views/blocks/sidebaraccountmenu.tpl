[{if ($oViewConf->displayExtendedAccountmenu())}]
	[{if ($oViewConf->attachAccountMenu())}]
		[{include file='page/account/inc/account_menu.tpl'}]
	[{/if}]
	
	[{include file=$oViewConf->getModulePath('oxac_accountmenu','views/inc/extendedmenu.tpl')}]
[{/if}]

[{$smarty.block.parent}]