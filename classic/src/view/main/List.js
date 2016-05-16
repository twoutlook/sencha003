/**
 * This view is an example list of people.
 */
Ext.define('sencha003.view.main.List', {
    extend: 'Ext.grid.Panel',
    xtype: 'mainlist',
//    scroll:  true,
//    frame:true,
    requires: [
        'sencha003.store.Personnel'
    ],
    title: '富鈦通信錄',
    store: {
        type: 'personnel'
    },
    columns: [
//        {number: 'id', dataIndex: 'id', flex: 1},
        {text: '部門', dataIndex: 'dept', flex: 1},
        {text: '職稱', dataIndex: 'job_title', flex: 1},
        {text: '姓名', dataIndex: 'name' },
        {text: '郵箱', dataIndex: 'email', flex: 1},
        {text: '分機', dataIndex: 'ext_num', flex: 1},
        {text: '手機號碼', dataIndex: 'phone', flex: 1}
    ],
    listeners: {
        select: 'onItemSelected'
    }
});
