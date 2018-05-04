# hubzilla-widgets

## installation

in your hubzilla directory use the util helper to add the plugins from git:

    util/add_widget_repo https://github.com/redmatrix/hubzilla-widgets.git hubzilla-widgets

then enable the desired plugins in the hubzilla admin panel:

Dropdown Menu > Admin > plugins

https://www.hubzilla.example/admin/plugins/

## usage

Select your page in the layout editor:

Dropdown Menu > settings > display settings > content settings > system page layout editor

https://www.hubzilla.example/pdledit

#### mastofeed

    [widget=mastofeed]
        [var=url]https://foo.bar/feed[/var]
    [/widget]

#### netselect
    [widget=netselect][/widget]

#### iframe

    [widget=iframe]
        [var=height]500[/var]
        [var=url]https://foo.bar/content[/var]
    [/widget]
