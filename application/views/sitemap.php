<?php echo'<?xml version="1.0" encoding="utf-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
   <loc><?php echo site_url();?></loc>
   <priority>1.0</priority>
   <changefreq>daily</changefreq>
</url>

<url>
   <loc><?=site_url('haqqimizda');?></loc>
   <priority>1.0</priority>
   <changefreq>daily</changefreq>
</url>

<url>
   <loc><?=site_url('chipabunelik');?></loc>
   <priority>1.0</priority>
   <changefreq>daily</changefreq>
</url>

<url>
   <loc><?=site_url('elaqe');?></loc>
   <priority>1.0</priority>
   <changefreq>daily</changefreq>
</url>



<!-- Sitemap -->
<?php foreach($pcat as $cet) { ?>
<url>
   <loc><?=site_url('category/').$cet['id'].'-'.$cet['az_slug']?></loc>
   <priority>0.5</priority>
   <changefreq>daily</changefreq>
</url>
<?php } ?>

<?php foreach($news as $n) { ?>
<url>
   <loc><?=site_url('chipxeber/').$n['id'].'-'.$n[ language()."_slug"];?></loc>
   <priority>0.5</priority>
   <changefreq>daily</changefreq>
</url>
<?php } ?>


</urlset>
