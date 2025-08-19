<?php
// Deteksi protocol dan host otomatis
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$baseUrl = $protocol . '://' . $host . '/';

// Tanggal lastmod hari ini
$lastMod = date('Y-m-d');

// Path file sitemap.xml dan robots.txt (root folder)
$sitemapPath = __DIR__ . '/sitemap.xml';
$robotsPath = __DIR__ . '/robots.txt';

// Buat sitemap.xml dengan satu URL homepage
$sitemapContent = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>{$baseUrl}</loc>
    <lastmod>{$lastMod}</lastmod>
    <priority>1.0</priority>
  </url>
</urlset>
XML;

// Buat robots.txt yang mengizinkan semua dan menunjuk ke sitemap.xml
$robotsContent = <<<TXT
User-agent: *
Disallow:

Sitemap: {$baseUrl}sitemap.xml

TXT;

// Simpan file sitemap.xml
file_put_contents($sitemapPath, $sitemapContent);

// Simpan file robots.txt
file_put_contents($robotsPath, $robotsContent);

// Tampilkan pesan berhasil
echo "✅ sitemap.xml dan robots.txt berhasil dibuat di folder root.<br>";
echo "Sitemap URL: {$baseUrl}sitemap.xml<br>";
echo "Robots.txt URL: {$baseUrl}robots.txt<br>";

// Hapus file script ini sendiri
@unlink(__FILE__);
?>
