<!-- resources/views/landing-page.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Deskripsi halaman Anda di sini">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
    <header id="main-header">
        <div class="container">
            <div class="logo">
                <img src="https://suitmedia.com/_nuxt/img/logo-white.081d3ce.png" alt="Logo" >
            </div>
            <nav>
                <ul>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#ideas" class="nav-anchor nuxt-link-exact-active nuxt-link-active" aria-current="page">Ideas</a></li>
                    <li><a href="#careers">Careers</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="banner">
        <img src="{{ asset('images/banner-fe-suitmedia.jpg') }}" alt="Banner Image">
        <div class="content">
            <h1>IDEAS</h1>
            <p>Where all our great things begin</p>
        </div>
    </section>

<section class="list-post">

<div class="list-controls">
  <div class="showing-info">
    Showing 1 - 10 of 100
  </div>
  <div class="page-controls">
    <div class="show-per-page">
      Show per page:
      <select name="show-per-page">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="50">50</option>
      </select>
    </div>
    <div class="sort-by">
      Sort by:
      <select name="sort-by">
        <option value="newest">Newest</option>
        <option value="oldest">Oldest</option>
      </select>
    </div>
  </div>
</div>

    <div class="baris">
  <div class="post-card">
    <a href="#" class="post-link">
      <div class="post-thumbnail">
        <img src="https://suitmedia.static-assets.id/storage/files/6237/conversions/shutterstock_1565680594-medium.jpg" alt="Thumbnail Post 1" loading="lazy">
      </div>
      <div class="post-info">
        <h3 class="post-title">Judul Post 1 yang Panjangnya Maksimal Tiga Baris dan Diberi Ellipsis Jika Lebih</h3>
        <p class="post-date">Tanggal Posting</p>
        <p class="post-excerpt">Deskripsi singkat post yang bisa berisi beberapa kalimat.</p>
      </div>
    </a>
  </div>
  <div class="post-card">
    <a href="#" class="post-link">
      <div class="post-thumbnail">
        <img src="https://suitmedia.static-assets.id/storage/files/6237/conversions/shutterstock_1565680594-medium.jpg" alt="Thumbnail Post 1" loading="lazy">
      </div>
      <div class="post-info">
        <h3 class="post-title">Judul Post 1 yang Panjangnya Maksimal Tiga Baris dan Diberi Ellipsis Jika Lebih</h3>
        <p class="post-date">Tanggal Posting</p>
        <p class="post-excerpt">Deskripsi singkat post yang bisa berisi beberapa kalimat.</p>
      </div>
    </a>
  </div>
  <div class="post-card">
    <a href="#" class="post-link">
      <div class="post-thumbnail">
        <img src="https://suitmedia.static-assets.id/storage/files/6237/conversions/shutterstock_1565680594-medium.jpg" alt="Thumbnail Post 1" loading="lazy">
      </div>
      <div class="post-info">
        <h3 class="post-title">Judul Post 1 yang Panjangnya Maksimal Tiga Baris dan Diberi Ellipsis Jika Lebih</h3>
        <p class="post-date">Tanggal Posting</p>
        <p class="post-excerpt">Deskripsi singkat post yang bisa berisi beberapa kalimat.</p>
      </div>
    </a>
  </div>
  <div class="post-card">
    <a href="#" class="post-link">
      <div class="post-thumbnail">
        <img src="https://suitmedia.static-assets.id/storage/files/6237/conversions/shutterstock_1565680594-medium.jpg" alt="Thumbnail Post 1" loading="lazy">
      </div>
      <div class="post-info">
        <h3 class="post-title">Judul Post 1 yang Panjangnya Maksimal Tiga Baris dan Diberi Ellipsis Jika Lebih</h3>
        <p class="post-date">Tanggal Posting</p>
        <p class="post-excerpt">Deskripsi singkat post yang bisa berisi beberapa kalimat.</p>
      </div>
    </a>
  </div>
    </div>

    <div class="baris">
    <div class="post-card">
    <a href="#" class="post-link">
      <div class="post-thumbnail">
        <img src="https://suitmedia.static-assets.id/storage/files/6237/conversions/shutterstock_1565680594-medium.jpg" alt="Thumbnail Post 1" loading="lazy">
      </div>
      <div class="post-info">
        <h3 class="post-title">Judul Post 1 yang Panjangnya Maksimal Tiga Baris dan Diberi Ellipsis Jika Lebih</h3>
        <p class="post-date">Tanggal Posting</p>
        <p class="post-excerpt">Deskripsi singkat post yang bisa berisi beberapa kalimat.</p>
      </div>
    </a>
  </div>
  <div class="post-card">
    <a href="#" class="post-link">
      <div class="post-thumbnail">
        <img src="https://suitmedia.static-assets.id/storage/files/6237/conversions/shutterstock_1565680594-medium.jpg" alt="Thumbnail Post 1" loading="lazy">
      </div>
      <div class="post-info">
        <h3 class="post-title">Judul Post 1 yang Panjangnya Maksimal Tiga Baris dan Diberi Ellipsis Jika Lebih</h3>
        <p class="post-date">Tanggal Posting</p>
        <p class="post-excerpt">Deskripsi singkat post yang bisa berisi beberapa kalimat.</p>
      </div>
    </a>
  </div>
  <div class="post-card">
    <a href="#" class="post-link">
      <div class="post-thumbnail">
        <img src="https://suitmedia.static-assets.id/storage/files/6237/conversions/shutterstock_1565680594-medium.jpg" alt="Thumbnail Post 1" loading="lazy">
      </div>
      <div class="post-info">
        <h3 class="post-title">Judul Post 1 yang Panjangnya Maksimal Tiga Baris dan Diberi Ellipsis Jika Lebih</h3>
        <p class="post-date">Tanggal Posting</p>
        <p class="post-excerpt">Deskripsi singkat post yang bisa berisi beberapa kalimat.</p>
      </div>
    </a>
  </div>
  <div class="post-card">
    <a href="#" class="post-link">
      <div class="post-thumbnail">
        <img src="https://suitmedia.static-assets.id/storage/files/6237/conversions/shutterstock_1565680594-medium.jpg" alt="Thumbnail Post 1" loading="lazy">
      </div>
      <div class="post-info">
        <h3 class="post-title">Judul Post 1 yang Panjangnya Maksimal Tiga Baris dan Diberi Ellipsis Jika Lebih</h3>
        <p class="post-date">Tanggal Posting</p>
        <p class="post-excerpt">Deskripsi singkat post yang bisa berisi beberapa kalimat.</p>
      </div>
    </a>
  </div>
    </div>

    <div class="pagination">
        <span class="pagination-link">&laquo;</span>
        <span class="pagination-link">&lsaquo;</span>
        <span class="pagination-number">1</span>
        <span class="pagination-number">2</span>
        <span class="pagination-number">3</span>
        <span class="pagination-number">4</span>
        <span class="pagination-number">5</span>
        <span class="pagination-link">&rsaquo;</span>
        <span class="pagination-link">&raquo;</span>
    </div>

</section>

    <script src="{{ asset('js/scripts.js') }}"></script>
    <script>
        // Add your custom scripts here
    </script>
</body>
</html>
