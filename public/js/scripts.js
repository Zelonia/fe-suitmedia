// public/js/scripts.js

var lastScrollTop = 0;

window.addEventListener('scroll', function() {
    var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Scroll down
        document.getElementById('main-header').classList.add('scrolled');
    } else {
        // Scroll up
        document.getElementById('main-header').classList.remove('scrolled');
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
}, false);


window.addEventListener('scroll', function() {
    let scrollPosition = window.scrollY;
    let banner = document.querySelector('.banner img');
    banner.style.transform = `translateY(-${scrollPosition * 0.5}px)`; // Adjust the speed of parallax effect here
});

const express = require('express');
const { createProxyMiddleware } = require('http-proxy-middleware');

const app = express();

// Atur proxy untuk API
app.use('/api', createProxyMiddleware({
  target: 'https://suitmedia-backend.suitdev.com',
  changeOrigin: true,
  pathRewrite: {
    '^/api': '/api',
  },
}));

app.listen(3000, () => {
  console.log('Server is running on port 3000');
});


let currentPage = 1;
const itemsPerPage = 10; // Jumlah item per halaman
let totalItems = 100; // Total jumlah item (misalnya dari database)

function renderList(page) {
  // Logic untuk menampilkan item pada halaman tertentu
  const startIndex = (page - 1) * itemsPerPage;
  const endIndex = Math.min(startIndex + itemsPerPage, totalItems);
  // Render item dari startIndex hingga endIndex
}

function updatePagination() {
  // Update tampilan pagination berdasarkan currentPage dan totalItems
  document.getElementById('currentPage').textContent = currentPage;
  // Update logic untuk disable tombol Previous jika currentPage adalah 1
  // Update logic untuk disable tombol Next jika currentPage adalah halaman terakhir
}

function sortList(sortBy) {
  // Logic untuk mengurutkan list berdasarkan pilihan pengguna
}

document.getElementById('prevPage').addEventListener('click', () => {
  if (currentPage > 1) {
    currentPage--;
    renderList(currentPage);
    updatePagination();
  }
});

document.getElementById('nextPage').addEventListener('click', () => {
  const maxPage = Math.ceil(totalItems / itemsPerPage);
  if (currentPage < maxPage) {
    currentPage++;
    renderList(currentPage);
    updatePagination();
  }
});

document.getElementById('sortOption').addEventListener('change', (event) => {
  const sortBy = event.target.value;
  sortList(sortBy);
  renderList(currentPage);
});

window.addEventListener('scroll', function() {
  const header = document.getElementById('main-header');
  if (window.scrollY > 0) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

