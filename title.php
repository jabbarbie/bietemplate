<title><b:if cond='data:view.isPost'><data:view.title/>  
<b:elseif cond='data:view.isPage'/><data:view.title/>
<b:elseif cond='data:view.isHomepage'/><data:blog.title/>
<b:elseif cond='data:view.search.label'/><data:blog.pageTitle/>
<b:elseif cond='data:view.search.query'/><data:view.search.resultsMessage/>
<b:elseif cond='data:view.search and !data:view.search.label and !data:view.search.query'/><data:blog.pageTitle/>
<b:elseif cond='data:view.isArchive'/><data:view.archive.rangeMessage/>
<b:elseif cond='data:view.isError'/>Not Found</b:if></title>
