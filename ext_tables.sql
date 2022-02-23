create table tx_linkitems_domain_model_linkitem
(
    uid_foreign   int(11) unsigned default '0',
    tablename     varchar(64)   default 'tt_content' not null,
    fieldname     varchar(64)   default 'linkitem'   not null,
    text          varchar(255)  default ''           not null,
    link          varchar(1024) default ''           not null,
    style         varchar(255)  default 'button'     not null,
    icon          varchar(255)  default ''           not null,
    custom_icon   varchar(255)  default ''           not null,
    icon_position varchar(255)  default 'right'      not null
);

create table tt_content
(
    linkitems       int(11) unsigned default 0,
    linkitem_align  varchar(16) default '' not null,
    linkitem_layout varchar(16) default '' not null,
);


