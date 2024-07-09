
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

  @foreach ($collection as $key=>$c)
    <url>
      <loc>{{ $c->name }}</loc>
      <lastmod>{{date('Y-m-d', strtotime($c->created_at))}}</lastmod>
      <priority>{{$key < 1 ? '1.00' : '0.80'}}</priority>
    </url>
  @endforeach 

  @foreach ($subMenu as $key=>$c)
    <url>
      <loc>{{ $c->url }}</loc>
      <lastmod>{{date('Y-m-d', strtotime($c->created_at))}}</lastmod>
      <priority>{{$key < 1 ? '1.00' : '0.80'}}</priority>
    </url>
  @endforeach
  
</urlset>