 <script>
  function handleColorTheme(e) {
    document.documentElement.setAttribute("data-color-theme", e);
  }
</script>

  <script src="<?= base_url(); ?>/assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="<?= base_url(); ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/theme/app.init.js"></script>
  <script src="<?= base_url(); ?>/assets/js/theme/theme.js"></script>
  <script src="<?= base_url(); ?>/assets/js/theme/app.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  <!-- highlight.js (code view) -->
  <script src="<?= base_url(); ?>/assets/js/highlights/highlight.min.js"></script>
  <script>
  hljs.initHighlightingOnLoad();


  document.querySelectorAll("pre.code-view > code").forEach((codeBlock) => {
    codeBlock.textContent = codeBlock.innerHTML;
  });
</script>
  <script src="<?= base_url(); ?>/assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/dashboards/dashboard.js"></script>
</body>

</html>