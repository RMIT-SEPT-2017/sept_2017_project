webshim.setOptions('forms-ext', {
    replaceUI: 'auto',
    types: 'date',
    date: {
        startView: 2,
        inlinePicker: true,
        classes: 'hide-inputbtns'
    }
});
webshim.setOptions('forms', {
    lazyCustomMessages: true
});
//start polyfilling
webshim.polyfill('forms forms-ext');
