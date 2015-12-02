<?php

    define('LANG_ADMIN_CONTROLLER',     'Control Panel');

    define('LANG_CP_SECTION_INDEX',             'Index');
    define('LANG_CP_SECTION_CTYPES',            'Content Types');
    define('LANG_CP_SECTION_CONTENT',           'Content');
    define('LANG_CP_SECTION_USERS',             'Users');
    define('LANG_CP_SECTION_GROUPS',            'Groups');
    define('LANG_CP_SECTION_MENU',              'Menu');
    define('LANG_CP_SECTION_WIDGETS',           'Widgets');
    define('LANG_CP_SECTION_CONTROLLERS',       'Components');
    define('LANG_CP_SECTION_SETTINGS',          'Settings');
    define('LANG_CP_SECTION_UPDATE',            'Updates');

    define('LANG_CP_ACTIONS',                   'Actions');
    define('LANG_CP_SELECTED_EDIT',             'Edit');
    define('LANG_CP_SELECTED_DELETE',           'Delete');

    define('LANG_CP_CTYPES_ADD',                'Add content type');
    define('LANG_CP_CTYPES_EDIT',               'Edit content type');
    define('LANG_CP_CTYPE_CREATED',             'Content type &laquo;%s&raquo; created');
    define('LANG_CP_CTYPE_DELETE_CONFIRM',      'Delete content type "{title}"?');

    define('LANG_CP_CTYPE_SETTINGS',            'Settings');
    define('LANG_CP_CTYPE_LABELS',              'Labels');
    define('LANG_CP_CTYPE_FIELDS',              'Fields');
    define('LANG_CP_CTYPE_PROPS',               'Properties');
    define('LANG_CP_CTYPE_PERMISSIONS',         'Permissions');
    define('LANG_CP_CTYPE_DATASETS',            'Datasets');
    define('LANG_CP_CTYPE_DATASET',             'Dataset');

    define('LANG_CP_SYSTEM_NAME_HINT',          'Used in URLs and database table names<br>Cannot be changed later!');

    define('LANG_CP_CONTENT_ITEM_ADD',          'Add item');
    define('LANG_CP_CONTENT_CATS_ADD',          'Add category');
    define('LANG_CP_CONTENT_CATS_EDIT',         'Edit category');
    define('LANG_CP_CONTENT_CATS_ORDER',        'Reorder');
    define('LANG_CP_CONTENT_CATS_ORDER_DRAG',   'Drag categories to reorder');
    define('LANG_CP_CONTENT_CATS_NONE',         'This content has no categoies');
    define('LANG_CP_CONTENT_ITEM_DELETE_CONFIRM',  'Delete "{title}"?');
    define('LANG_CP_CONTENT_CATS_TITLES',       'Category title or categories tree');
    define('LANG_CP_CONTENT_CATS_TITLES_HINT',  'To create multiple categories each of them must be on a new line.<br>Hyphen before title will make nested category');
    define('LANG_CP_CONTENT_CATS_BIND',         'Bind parent category properties');

    define('LANG_CP_BASIC',                     'Basic settings');
    define('LANG_CP_PUBLICATION',               'Publication');
    define('LANG_CP_PREMOD_ADD',                'Approval required after adding');
    define('LANG_CP_PREMOD_EDIT',               'Approval required after editing');
    define('LANG_CP_IS_PUB_CONTROL',            'Publication date control');
	define('LANG_CP_IS_PUB_CONTROL_HINT',		'Allows to change publication date and period by users permitted in "Permissions" tab');
    define('LANG_CP_CATEGORIES',                'Categories');
    define('LANG_CP_CATEGORIES_ON',             'Categories enabled');
    define('LANG_CP_CATEGORIES_RECURSIVE',      'Show items from child categories in parent category');
	define('LANG_CP_CATEGORIES_EMPTY_ROOT',		"Don't show items in root category");
	define('LANG_CP_CATEGORIES_MULTI',			'Allow multiple categories for single item');
    define('LANG_CP_CATEGORIES_CHANGE',         'Allow to change category after item is created');
    define('LANG_CP_CATEGORIES_OPEN_ROOT',      'Allow to add items in the root category');
    define('LANG_CP_CATEGORIES_ONLY_LAST',      'Allow to add items only in the category of the last nesting level');
    define('LANG_CP_CATEGORIES_SHOW',           'Show categories list above items list');
    define('LANG_CP_CTYPE_CATEGORIES_OFF',      'This content type has categories disabled in <a href="%s">settings</a>. Categories will not be shown on site');
    define('LANG_CP_FOLDERS',                   'Private folders');
    define('LANG_CP_FOLDERS_ON',                'Private folders enabled');
    define('LANG_CP_FOLDERS_HINT',              'Each user will be able to store content in the personal folders that appear when viewing the content in profile');
    define('LANG_CP_CT_GROUPS',                 'Groups');
    define('LANG_CP_CT_GROUPS_ALLOW',           'This content can be posted inside groups');
    define('LANG_CP_CT_GROUPS_ALLOW_ONLY',      '...and only inside groups');
    define('LANG_CP_COMMENTS',                  'Comments');
    define('LANG_CP_COMMENTS_ON',               'Comments enabled');
    define('LANG_CP_RATING',                    'Rating');
    define('LANG_CP_RATING_ON',                 'Rating enabled');
    define('LANG_CP_TAGS_ON',                   'Tags enabled');
    define('LANG_CP_TAGS_IN_LIST',              'Show tags in list view');
    define('LANG_CP_TAGS_IN_ITEM',              'Show tags in item view');
    define('LANG_CP_PHOTOS',                    'Images');
    define('LANG_CP_PHOTOS_ON',                 'Main image');
    define('LANG_CP_PHOTOS_MULTI',              'Additional images');
    define('LANG_CP_SEOMETA_DEFAULT',           'SEO: Default');
    define('LANG_CP_SEOMETA',                   'SEO: Items');
	define('LANG_CP_SEOMETA_MANUAL_TITLE',      'Set page title manually');
    define('LANG_CP_SEOMETA_AUTO_KEYS',         'Automatic keywords generation');
    define('LANG_CP_SEOMETA_AUTO_DESC',         'Automatic description generation');
    define('LANG_CP_AUTO_URL',                  'Automatic URL generation');
    define('LANG_CP_FIXED_URL',                 'Keep URL after item is edited');
    define('LANG_CP_URL_PATTERN',               'URL pattern');
    define('LANG_CP_SEOMETA_CATS',              'SEO: Categories');
	define('LANG_CP_SEOMETA_CATS_TITLE',        'Allow custom titles for categories pages');
    define('LANG_CP_SEOMETA_CATS_KEYS',         'Allow keywords for categories');
    define('LANG_CP_SEOMETA_CATS_DESC',         'Allow descriptions for categories');
    define('LANG_CP_CATS_AUTO_URL',             'Generate URL from category title');
    define('LANG_CP_LISTVIEW_OPTIONS',          'List view options');
    define('LANG_CP_PROFILELIST_ON',            'List view in members profiles enabled');
    define('LANG_CP_LISTVIEW_ON',               'List view enabled');
    define('LANG_CP_LISTVIEW_FILTER',           'Show filter');
    define('LANG_CP_LISTVIEW_FILTER_EXPAND',    'Expand filter panel');
    define('LANG_CP_LISTVIEW_STYLE',            'List style');
    define('LANG_CP_LISTVIEW_STYLE_BASIC',      'Basic list');
    define('LANG_CP_LISTVIEW_STYLE_FEATURED',   'Featured list');
    define('LANG_CP_LISTVIEW_STYLE_TILES',      'Tiles');
    define('LANG_CP_LISTVIEW_STYLE_TABLE',      'Table');
    define('LANG_CP_LISTVIEW_STYLE_HINT',       'Templates from folder <b>/templates/%s/content</b>');
    define('LANG_CP_ITEMVIEW_OPTIONS',          'Item view options');
    define('LANG_CP_ITEMVIEW_ON',               'Item view enabled');
	define('LANG_CP_ITEMVIEW_HITS_ON',			'Count the number of views (hits)');
    define('LANG_CP_ITEMVIEW_APPEND_HTML',      'Append HTML');
    define('LANG_CP_ITEMVIEW_APPEND_HTML_HINT', 'HTML code you enter here will be displayed at each entry');

    define('LANG_CP_NUMERALS_LABELS',           'Plurals');
    define('LANG_CP_NUMERALS_1_LABEL',          'One (...)');
    define('LANG_CP_NUMERALS_2_LABEL',          'Two (...)');
    define('LANG_CP_NUMERALS_10_LABEL',         'Many (...)');
    define('LANG_CP_ACTIONS_LABELS',            'Actions');
    define('LANG_CP_ACTION_ADD_LABEL',          'Add (...)');
    define('LANG_CP_LIST_LABELS',               'Headings');
    define('LANG_CP_LIST_LABEL',                'Heading of the list');
    define('LANG_CP_PROFILE_LABEL',             'Heading of the list in profile');
    define('LANG_CP_LIST_LABELS_HINT',          'Using content type title by default');

    define('LANG_CP_TAB',                       'Tab');
    define('LANG_CP_TAB_TITLE',                 'Tab title');
    define('LANG_CP_TAB_IS_ACTIVE',             'Tab is enabled');

    define('LANG_CP_FIELD',                     'Field');
    define('LANG_CP_FIELD_FORMAT',              'Field validation');
    define('LANG_CP_FIELD_TYPE',                'Field type');
    define('LANG_CP_FIELD_TYPE_OPTS',           'Field options');
    define('LANG_CP_FIELD_VALUES',              'Default value (or list items)');
    define('LANG_CP_FIELD_PROFILE_VALUE',       "Get value from the user's profile");
    define('LANG_CP_FIELD_PROFILE_VALUE_HINT',  'The field can get the default value from a current user profile<br/>Only text boxes and lists');
    define('LANG_CP_FIELD_TITLE',               'Field title');
    define('LANG_CP_FIELD_FIELDSET',            'Field group');
    define('LANG_CP_FIELD_FIELDSET_SELECT',     'Select group');
    define('LANG_CP_FIELD_FIELDSET_ADD',        'Create new group');
    define('LANG_CP_FIELD_HINT',                'Field hint');
    define('LANG_CP_FIELD_ADD',                 'Add field');
    define('LANG_CP_FIELD_CREATED',             'Field &laquo;%s&raquo; is created');
    define('LANG_CP_FIELD_DELETE_CONFIRM',      'Delete field "{title}"?');
    define('LANG_CP_FIELD_VISIBILITY',          'Field visibility');
    define('LANG_CP_FIELD_LABELS',              'Label position');
    define('LANG_CP_FIELD_LABELS_IN_LIST',      'In list view');
    define('LANG_CP_FIELD_LABELS_IN_ITEM',      'In item view');
    define('LANG_CP_FIELD_LABEL_NONE',          'Hide');
    define('LANG_CP_FIELD_LABEL_LEFT',          'Left');
    define('LANG_CP_FIELD_LABEL_TOP',           'Top');
    define('LANG_CP_FIELD_IN_LIST',             'Show in list view');
    define('LANG_CP_FIELD_IN_ITEM',             'Show in item view');
    define('LANG_CP_FIELD_IN_LIST_SHORT',       'In list');
    define('LANG_CP_FIELD_IN_ITEM_SHORT',       'In item');
    define('LANG_CP_FIELD_IN_FILTER',           'Show in filter');
    define('LANG_CP_FIELD_PRIVACY',             'Privacy');
    define('LANG_CP_FIELD_PRIVATE',             'Show the field only to the item author');
    define('LANG_CP_FIELD_GROUPS_READ',         'Read access');
    define('LANG_CP_FIELD_GROUPS_EDIT',         'Write access');

    define('LANG_CP_PROPS_NO_CATS',             'Content type &laquo;%s&raquo; has no categories.');
    define('LANG_CP_PROPS_NO_CATS_ADD',         '<a href="%s">Create categories</a> to add properties.');
    define('LANG_CP_PROPS_ADD',                 'Create property');
    define('LANG_CP_PROPS_DELETE_CONFIRM',      'Delete property "{title}"? Property will be removed from all categories');
    define('LANG_CP_PROPS_BIND',                'Bind property');
    define('LANG_CP_PROPS_BIND_RECURSIVE',      'including nested categories');
    define('LANG_CP_PROPS_UNBIND',              'Unbind property');
    define('LANG_CP_PROP_TITLE',                'Property title');
    define('LANG_CP_PROP_IS_ACTIVE',            'Show property on the site');
    define('LANG_CP_PROP_VALUES',               'List items');
    define('LANG_CP_PROP_VALUES_HINT',          'One item in a row');
    define('LANG_CP_PROP_CATS',                 'Bind property to categories');

    define('LANG_CP_DATASET',                   'Dataset');
    define('LANG_CP_DATASET_ADD',               'Add dataset');
    define('LANG_CP_DATASET_TITLE',             'Dataset title');
    define('LANG_CP_DATASET_CREATED',           'Dataset &laquo;%s&raquo; is created');
    define('LANG_CP_DATASET_DELETE_CONFIRM',    'Delete dataset "{title}"?');
    define('LANG_CP_DATASET_IS_VISIBLE',        'Show dataset on the site');

    define('LANG_CP_MENU',                      'Menu');
    define('LANG_CP_MENU_ADD',                  'Add menu');
    define('LANG_CP_MENU_EDIT',                 'Menu settings');
    define('LANG_CP_MENU_CREATED',              'Menu &laquo;%s&raquo; is created');
    define('LANG_CP_MENU_DELETE',               'Delete menu');
    define('LANG_CP_MENU_DELETE_CONFIRM',       'Delete current menu?');
    define('LANG_CP_MENU_ITEM',                 'Menu item');
    define('LANG_CP_MENU_ITEM_PARENT',          'Parent item');
    define('LANG_CP_MENU_ITEM_CREATED',         'Menu item &laquo;%s&raquo; is created');
    define('LANG_CP_MENU_ITEM_TITLE',           'Menu item title');
    define('LANG_CP_MENU_ITEM_URL',             'URL');
    define('LANG_CP_MENU_ITEM_ADD',             'Add menu item');
    define('LANG_CP_MENU_ITEM_DELETE_CONFIRM',  'Delete item "{title}"?');
    define('LANG_CP_MENU_ITEM_ACTION',          'Menu item action');
    define('LANG_CP_MENU_ITEM_ACTION_URL',      'Open URL');
    define('LANG_CP_MENU_ITEM_ACTION_URL_HINT', 'For internal links leading slash is not required<br/>External links must begin with http://');
    define('LANG_CP_MENU_ITEM_ACTION_TARGET',   'Open link in');
    define('LANG_CP_MENU_ITEM_TARGET_SELF',     'Current window');
    define('LANG_CP_MENU_ITEM_TARGET_BLANK',    'New window');
    define('LANG_CP_MENU_ITEM_TARGET_PARENT',   'Parent window');
    define('LANG_CP_MENU_ITEM_TARGET_TOP',      'On top of all the frames');
    define('LANG_CP_MENU_IS_FIXED',             'This menu cannot be deleted');

    define('LANG_CP_WIDGETS_PAGE',              'Page');
    define('LANG_CP_WIDGETS_ADD',               'Add widget');
    define('LANG_CP_WIDGETS_ADD_PAGE',          'Add page');
    define('LANG_CP_WIDGETS_EDIT_PAGE',         'Edit');
    define('LANG_CP_WIDGETS_DELETE_PAGE',       'Delete');
    define('LANG_CP_WIDGETS_MISC',              'Miscellaneous');
    define('LANG_CP_WIDGET_DELETE_CONFIRM',     'Delete widget?');
    define('LANG_CP_WIDGET_PAGE_CREATED',       'Page &laquo;%s&raquo; is created');
    define('LANG_CP_WIDGET_PAGE_URLS',          'URL binding');
    define('LANG_CP_WIDGET_PAGE_URL_MASK',      'Positive masks');
    define('LANG_CP_WIDGET_PAGE_URL_MASK_NOT',  'Negative masks');
    define('LANG_CP_WIDGETS_UNUSED',            'Unused widgets');
    define('LANG_CP_WIDGETS_UNUSED_HINT',       'Put here the widgets you want to temporarily hide or move to another page without losing the settings');

    define('LANG_CP_USER_ADD',                  'Add user');
    define('LANG_CP_USER_CREATED',              'User &laquo;%s&raquo; is created');
    define('LANG_CP_USER_DELETE_CONFIRM',       'Delete a user {nickname}?\nAll his content and all his uploaded files will be also deleted');
    define('LANG_CP_USER_DELETED',              'User %s is deleted');
    define('LANG_CP_USER_GROUP_ADD',            'Add group');
    define('LANG_CP_USER_GROUP_EDIT',           'Edit group');
    define('LANG_CP_USER_GROUP_PERMS',          'Group permissions');
    define('LANG_CP_USER_GROUP_DELETE',         'Delete group');
    define('LANG_CP_USER_GROUP_DELETE_CONFIRM', 'Delete selected group?\nUsers will no be deleted');
    define('LANG_CP_USER_GROUP_CREATED',        'Group &laquo;%s&raquo; is created');
    define('LANG_CP_USER_GROUP_IS_PUBLIC',      'Allow to join this group after sign up');
    define('LANG_CP_USER_GROUP_IS_FILTER',      'Show in users filter');
    define('LANG_CP_USER_LOCKING',              'Blocking');
    define('LANG_CP_USER_LOCKED',               'Blocked');
    define('LANG_CP_USER_IS_LOCKED',            'Block user');
    define('LANG_CP_USER_LOCK_UNTIL',           'Block until');
    define('LANG_CP_USER_LOCK_REASON',          'Block reason');
    define('LANG_CP_USER_NOT_FOUND',            'User %s is not found');

    define('LANG_CP_CONTROLLERS_ADD',           'Install extension');
    define('LANG_CP_ERR_BACKEND_NOT_FOUND',     'Component &laquo;%s&raquo; has no settings');

    define('LANG_CP_SETTINGS_SITE',             'Site');
    define('LANG_CP_SETTINGS_GUI',              'Interface');
    define('LANG_CP_SETTINGS_FRONTPAGE',        'Homepage');
    define('LANG_CP_SETTINGS_DATE',             'Dates');
    define('LANG_CP_SETTINGS_MAIL',             'Mail');
    define('LANG_CP_SETTINGS_CACHE',            'Cache');
    define('LANG_CP_SETTINGS_DEBUG',            'Debugging');
    define('LANG_CP_SETTINGS_MISC',             'Misc');

    define('LANG_CP_SETTINGS_SITE_ENABLED',     'Site is online');
    define('LANG_CP_SETTINGS_SITE_REASON',      'Reason why site is offline');
    define('LANG_CP_SETTINGS_CHECK_UPDATES',    'Check updates when admin login');
    define('LANG_CP_SETTINGS_SITENAME',         'Site name');
    define('LANG_CP_SETTINGS_HOMETITLE',        'Frontpage title');
    define('LANG_CP_SETTINGS_METAKEYS',         'Site keywords');
    define('LANG_CP_SETTINGS_METADESC',         'Site description');
    define('LANG_CP_SETTINGS_META_NO_DEFAULT',  "Use that site keywords and description only on frontpage");
    define('LANG_CP_SETTINGS_LANGUAGE',         'Language');
    define('LANG_CP_SETTINGS_TEMPLATE',         'Theme');
    define('LANG_CP_SETTINGS_TEMPLATE_OPTIONS', 'Theme settings');
    define('LANG_CP_SETTINGS_HTML_MINIFY',      'Minify HTML');
    define('LANG_CP_SETTINGS_MERGE_CSS',        'Merge CSS files');
    define('LANG_CP_SETTINGS_MERGE_JS',         'Merge JS files');
    define('LANG_CP_SETTINGS_CACHE_CLEAN_MERGED',  '&mdash; <a href="%s">Clear cache</a>');
    define('LANG_CP_SETTINGS_MERGED_CLEANED',   'Folder <b>%s</b> is succesfully cleared');
    define('LANG_CP_SETTINGS_MERGED_CLEAN_FAIL','Unable to clear the folder <b>%s</b>. Check permissions or clean it manually');
	define('LANG_CP_SETTINGS_CTYPE_DEF',        'Default content type');
	define('LANG_CP_SETTINGS_CTYPE_DEF_HINT',	'Pages URLs of that content type will not contain type\'s system name');	
    define('LANG_CP_SETTINGS_FP_SHOW',          'Show on the homepage');
    define('LANG_CP_SETTINGS_FP_SHOW_NONE',     'Only widgets');
    define('LANG_CP_SETTINGS_FP_SHOW_PROFILE',  'User profile or authorization form');
    define('LANG_CP_SETTINGS_FP_SHOW_CONTENT',  'Content: %s');
    define('LANG_CP_SETTINGS_TIMEZONE',         'Time zone');
    define('LANG_CP_SETTINGS_DATE_FORMAT',      'PHP date format');
    define('LANG_CP_SETTINGS_DATE_FORMAT_JS',   'JavaScript date format');
    define('LANG_CP_SETTINGS_MAIL_TRANSPORT',   'Mail transport');
    define('LANG_CP_SETTINGS_MAIL_FROM',        'Mail from');
    define('LANG_CP_SETTINGS_MAIL_SMTP',        'SMTP settings');
    define('LANG_CP_SETTINGS_MAIL_SMTP_HOST',   'SMTP server');
    define('LANG_CP_SETTINGS_MAIL_SMTP_PORT',   'SMTP port');
    define('LANG_CP_SETTINGS_MAIL_SMTP_AUTH',   'SMTP authorization required');
    define('LANG_CP_SETTINGS_MAIL_SMTP_USER',   'SMTP user');
    define('LANG_CP_SETTINGS_MAIL_SMTP_PASS',   'SMTP password');
    define('LANG_CP_SETTINGS_MAIL_SMTP_ENC',    'SMTP Encryption');
    define('LANG_CP_SETTINGS_MAIL_SMTP_ENC_NO', 'None');
    define('LANG_CP_SETTINGS_MAIL_SMTP_ENC_SSL','SSL');
    define('LANG_CP_SETTINGS_MAIL_SMTP_ENC_TLS','TLS');	
    define('LANG_CP_SETTINGS_CACHE_ENABLED',    'Enable caching');
    define('LANG_CP_SETTINGS_CACHE_METHOD',     'Caching engine');
    define('LANG_CP_SETTINGS_CACHE_METHOD_NO',  'not available');
    define('LANG_CP_SETTINGS_CACHE_TTL',        'Cache TTL, sec');
    define('LANG_CP_SETTINGS_CACHE_HOST',       'Memcached server');
    define('LANG_CP_SETTINGS_CACHE_PORT',       'Memcached port');
    define('LANG_CP_SETTINGS_CACHE_MIN_HTML',   'Minify HTML');

    define('LANG_CP_MEMCACHE_NOT_AVAILABLE',    'Memcached module not found');
    define('LANG_CP_MEMCACHE_CONNECT_ERROR',    "Can't connect to Memcached");

    define('LANG_CP_SETTINGS_NOT_WRITABLE',     'Configuration file is not writable!');

    define('LANG_CP_SETTINGS_DEBUG_MODE',       'Debug mode enabled');
    define('LANG_CP_SETTINGS_EMULATE_LAG',      'Emulate network lag');

    define('LANG_CP_SETTINGS_CACHE_CLEAN',      'Clear cache');

    define('LANG_CP_INSTALL_PACKAGE',           'Install extension package');
    define('LANG_CP_INSTALL_PACKAGE_DONE',      'Installation completed');
    define('LANG_CP_INSTALL_PACKAGE_DONE_INFO', 'Extension package is successfully installed');
    define('LANG_CP_INSTALL_PACKAGE_NOT_CLEARED', 'Folder <b>%s</b> is not cleared due to permissions, you have to clear it manually');
    define('LANG_CP_INSTALL_PACKAGE_INFO',      'Package Info');
    define('LANG_CP_INSTALL_PACKAGE_FILE',      'Package file');
    define('LANG_CP_INSTALL_PACKAGE_FILE_HINT', 'File with <b>.icp</b> or <b>.zip</b> extension');
    define('LANG_CP_INSTALL_ERR_HINT',          'Result');
    define('LANG_CP_INSTALL_ERR_FIX',           'Solution');
    define('LANG_CP_INSTALL_ERR_WA',            'Workaround');
    define('LANG_CP_INSTALL_NOT_WRITABLE',      'Folder <b>%s</b> is not writable');
    define('LANG_CP_INSTALL_NOT_WRITABLE_HINT', 'Automatic upload is impossible');
    define('LANG_CP_INSTALL_NOT_WRITABLE_FIX',  'Make this folder writable and reload this page');
    define('LANG_CP_INSTALL_NOT_WRITABLE_WA',   'Change file extension to <b>.zip</b>, unpack it and upload its contents to <b>%s</b>');
    define('LANG_CP_INSTALL_NOT_ZIP',           'Server doesnt support automatic ZIP extraction');
    define('LANG_CP_INSTALL_NOT_ZIP_HINT',      'Automatic extraction is impossible');
    define('LANG_CP_INSTALL_NOT_ZIP_FIX',       'Contact server administrator with request to install <b>ZipArchive</b> class for PHP');
    define('LANG_CP_INSTALL_NOT_ZIP_WA',        'Change file extension to <b>.zip</b>, unpack it and upload its contents to <b>%s</b>');
    define('LANG_CP_INSTALL_ZIP_ERROR',         'Package extraction error');
    define('LANG_CP_INSTALL_FTP_NOTICE',        'To install the package you must provide FTP-user with permissions to create folders and files');
    define('LANG_CP_INSTALL_FTP_PRIVACY',       'Entered details will not be stored or transferred anywhere');

    define('LANG_CP_PACKAGE_AUTHOR',            'Package author');
    define('LANG_CP_PACKAGE_DESCRIPTION',       'Package description');
    define('LANG_CP_PACKAGE_CONTENTS',          'Package contents');
    define('LANG_CP_PACKAGE_DEPENDS',           'Package dependencies');
    define('LANG_CP_PACKAGE_DEPENDS_CORE',      'Required core version');

    define('LANG_CP_FTP_ACCOUNT',               'FTP account');
    define('LANG_CP_FTP_HOST',                  'Server');
    define('LANG_CP_FTP_USER',                  'Username');
    define('LANG_CP_FTP_PASS',                  'Password');
    define('LANG_CP_FTP_PATH',                  'Site root path');
	define('LANG_CP_FTP_PATH_HINT',             '<a href="http://docs.instantcms.ru/en/manual/addons/ftppath" target="_blank">How to specify correct path?</a>');
    define('LANG_CP_FTP_IS_PASV',               'Passive transfer mode');
    define('LANG_CP_FTP_AUTH_FAILED',           'Connection failed. Verify the specified details');
    define('LANG_CP_FTP_UPLOAD_FAILED',         'Error copying files. Make sure the path is correct and user has required permissions');
    define('LANG_CP_FTP_MKDIR_FAILED',          'Failed to create folder. Make sure the path is correct and user has required permissions');
	define('LANG_CP_FTP_NO_ROOT',				'Error: path %s not found');
	define('LANG_CP_FTP_BAD_ROOT',				'Bad root path: InstantCMS 2 not found in %s');

    define('ERR_VALIDATE_UNIQUE_FIELD',         'The field already exists');
    define('LANG_CP_BACK_TO_SITE',              'Back to site');
    define('LANG_CP_3RDPARTY_CREDITS',          'Third-party credits');

    define('LANG_MODERATOR_ADD',             'Add moderator');
    define('LANG_MODERATOR_ADD_HINT',        'Enter the user nickname you want to assign a moderator');
    define('LANG_MODERATOR_APPROVED_COUNT',  'Approved');
    define('LANG_MODERATOR_DELETED_COUNT',   'Deleted');
    define('LANG_MODERATOR_IDLE_COUNT',      'Idle');
    define('LANG_MODERATOR_ASSIGNED_DATE',   'Assigned');
    define('LANG_MODERATOR_ALREADY',         'User %s is already a moderator');

    define('LANG_CP_SCHEDULER',                     'Scheduler');
    define('LANG_CP_SCHEDULER_TASK',                'Task');
    define('LANG_CP_SCHEDULER_TASK_ADD',            'Add task');
    define('LANG_CP_SCHEDULER_TASK_EDIT',           'Edit task');
    define('LANG_CP_SCHEDULER_TASK_CONTROLLER',     'Component');
    define('LANG_CP_SCHEDULER_TASK_HOOK',           'Hook');
    define('LANG_CP_SCHEDULER_TASK_PERIOD',         'Interval, minutes');
    define('LANG_CP_SCHEDULER_TASK_LAST_RUN',       'Last run');
    define('LANG_CP_SCHEDULER_TASK_DELETE_CONFIRM', 'Delete task?');
    define('LANG_CP_SCHEDULER_TASK_CREATED',        'Task is created');
    define('LANG_CP_SCHEDULER_TASK_IS_ACTIVE',      'Task is active');
    define('LANG_CP_SCHEDULER_TASK_RUN',            'Run now');
    define('LANG_CP_SCHEDULER_TASK_RAN',            'Task &laquo;%s&raquo; was executed %s');
    define('LANG_CP_SCHEDULER_TASK_RUN_FAIL',       'Failed to execute task &laquo;%s&raquo;');

    define('LANG_CP_UPDATE_CHECK',                  'Check for updates');
    define('LANG_CP_UPDATE_DATE',                   'Release date');
    define('LANG_CP_UPDATE_DOWNLOAD',               'Download package');
    define('LANG_CP_UPDATE_DOWNLOAD_FAIL',          'Unable to download the updating package');
    define('LANG_CP_UPDATE_INSTALL',                'Install update');
    define('LANG_CP_UPDATE_AVAILABLE',              'Update %s is available');
    define('LANG_CP_UPDATE_NOT_AVAILABLE',          'No updates. You are using the latest version');
    define('LANG_CP_UPDATE_CHECK_FAIL',             'Unable to check for updates');
    define('LANG_CP_UPDATE_MANUAL_1',               'Automatic downloading is not possible because the server is missing CURL.');
    define('LANG_CP_UPDATE_MANUAL_2',               'Download the arhive manually and <a href="'.href_to('admin', 'install').'">install</a> it');

    define('LANG_HELP_URL_CONTENT',                 'http://docs.instantcms.ru/en/manual/content');
    define('LANG_HELP_URL_CONTENT_CATS',            'http://docs.instantcms.ru/en/manual/content/cats');
    define('LANG_HELP_URL_CTYPES',                  'http://docs.instantcms.ru/en/manual/ctypes');
    define('LANG_HELP_URL_CTYPES_BASIC',            'http://docs.instantcms.ru/en/manual/ctypes/add');
    define('LANG_HELP_URL_CTYPES_LABELS',           'http://docs.instantcms.ru/en/manual/ctypes/labels');
    define('LANG_HELP_URL_CTYPES_FIELDS',           'http://docs.instantcms.ru/en/manual/ctypes/fields');
    define('LANG_HELP_URL_CTYPES_FIELD',            'http://docs.instantcms.ru/en/manual/ctypes/fields/add');
    define('LANG_HELP_URL_CTYPES_PROPS',            'http://docs.instantcms.ru/en/manual/ctypes/props');
    define('LANG_HELP_URL_CTYPES_PROP',             'http://docs.instantcms.ru/en/manual/ctypes/props/add');
    define('LANG_HELP_URL_CTYPES_DATASETS',         'http://docs.instantcms.ru/en/manual/ctypes/datasets');
    define('LANG_HELP_URL_CTYPES_DATASET',          'http://docs.instantcms.ru/en/manual/ctypes/datasets/add');
    define('LANG_HELP_URL_CTYPES_PERMS',            'http://docs.instantcms.ru/en/manual/ctypes/permissions');
    define('LANG_HELP_URL_CTYPES_MODERATORS',       'http://docs.instantcms.ru/en/manual/ctypes/moderators');
    define('LANG_HELP_URL_MENU',                    'http://docs.instantcms.ru/en/manual/menu');
    define('LANG_HELP_URL_WIDGETS',                 'http://docs.instantcms.ru/en/manual/widgets');
    define('LANG_HELP_URL_WIDGETS_CFG',             'http://docs.instantcms.ru/en/manual/widgets/config');
    define('LANG_HELP_URL_WIDGETS_PAGES',           'http://docs.instantcms.ru/en/manual/widgets/pages');
    define('LANG_HELP_URL_COMPONENTS',              'http://docs.instantcms.ru/en/manual/components');
    define('LANG_HELP_URL_COM_AUTH',                'http://docs.instantcms.ru/en/manual/components/auth');
    define('LANG_HELP_URL_COM_ACTIVITY',            'http://docs.instantcms.ru/en/manual/components/activity');
    define('LANG_HELP_URL_COM_GROUPS',              'http://docs.instantcms.ru/en/manual/components/groups');
    define('LANG_HELP_URL_COM_RECAPTCHA',           'http://docs.instantcms.ru/en/manual/components/recaptcha');
    define('LANG_HELP_URL_COM_COMMENTS',            'http://docs.instantcms.ru/en/manual/components/comments');
	define('LANG_HELP_URL_COM_IMAGES',				'http://docs.instantcms.ru/en/manual/components/images');
    define('LANG_HELP_URL_COM_USERS',               'http://docs.instantcms.ru/en/manual/components/users');
    define('LANG_HELP_URL_COM_USERS_MIGRATON',      'http://docs.instantcms.ru/en/manual/components/users/migrations');
    define('LANG_HELP_URL_COM_MARKITUP',            'http://docs.instantcms.ru/en/manual/components/markitup');
    define('LANG_HELP_URL_COM_RATING',              'http://docs.instantcms.ru/en/manual/components/rating');
    define('LANG_HELP_URL_COM_SEARCH',              'http://docs.instantcms.ru/en/manual/components/search');
    define('LANG_HELP_URL_COM_TAGS',                'http://docs.instantcms.ru/en/manual/components/tags');
    define('LANG_HELP_URL_COM_RSS',                 'http://docs.instantcms.ru/en/manual/components/rss');
    define('LANG_HELP_URL_COM_SITEMAP',             'http://docs.instantcms.ru/en/manual/components/sitemap');
	define('LANG_HELP_URL_COM_PHOTOS',				'http://docs.instantcms.ru/en/manual/components/photos');
    define('LANG_HELP_URL_USERS',                   'http://docs.instantcms.ru/en/manual/users');
    define('LANG_HELP_URL_USERS_USER',              'http://docs.instantcms.ru/en/manual/users/user');
    define('LANG_HELP_URL_USERS_GROUP',             'http://docs.instantcms.ru/en/manual/users/group');
    define('LANG_HELP_URL_SETTINGS',                'http://docs.instantcms.ru/en/manual/settings');
    define('LANG_HELP_URL_SETTINGS_GLOBAL',         'http://docs.instantcms.ru/en/manual/settings/global');
    define('LANG_HELP_URL_SETTINGS_SCHEDULER',      'http://docs.instantcms.ru/en/manual/settings/scheduler');
    define('LANG_HELP_URL_SETTINGS_SCHEDULER_TASK', 'http://docs.instantcms.ru/en/manual/settings/scheduler/task');
