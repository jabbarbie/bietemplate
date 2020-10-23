<!-- Post Breadcrumbs --> 
<b:if cond='data:view.isPost'>
  <nav id='breadcrumbs'>
    <a expr:href='data:blog.homepageUrl'><data:messages.home/></a>
    <b:if cond='data:post.labels'>
      <a class='b-label' expr:href='data:post.labels.first.url'> <data:post.labels.first.name/></a>
    </b:if>
    <a class='b-label' expr:href="data:post.url"><data:post.title/></a>
  </nav>

  <script type='application/ld+json'>
  {
    &quot;@context&quot;: &quot;http://schema.org&quot;,
    &quot;@type&quot;: &quot;BreadcrumbList&quot;,
    &quot;@id&quot;: &quot;#Breadcrumb&quot;,
    &quot;itemListElement&quot;: [{
      &quot;@type&quot;: &quot;ListItem&quot;,
      &quot;position&quot;: 1,
      &quot;item&quot;: {
        &quot;name&quot;: &quot;<data:messages.home/>&quot;,
        &quot;@id&quot;: &quot;<data:blog.homepageUrl.jsonEscaped/>&quot;
      }
    },{
      &quot;@type&quot;: &quot;ListItem&quot;,
      &quot;position&quot;: 2,
      &quot;item&quot;: {
        &quot;name&quot;: &quot;<b:if cond='data:post.labels'><data:post.labels.first.name/></b:if>&quot;,
        &quot;@id&quot;: &quot;<data:post.labels.first.url.jsonEscaped/>&quot;
      }
    },{
      &quot;@type&quot;: &quot;ListItem&quot;,
      &quot;position&quot;: 3,
      &quot;item&quot;: {
        &quot;name&quot;: &quot;<data:post.title/>&quot;,
        &quot;@id&quot;: &quot;<data:post.url.jsonEscaped/>&quot;
      }
    }]
  }
</script>
</b:if>