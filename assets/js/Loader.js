<script>
  window.addEventListener('load', () => {
    // بعد 3 ثواني يخفي اللودر ويظهر المحتوى
    setTimeout(() => {
      document.getElementById('loader').style.display = 'none';
      document.getElementById('content').style.display = 'block';
    }, 3000); // 3000 ملي ثانية = 3 ثواني
  });
</script>
