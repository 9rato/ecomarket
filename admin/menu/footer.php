
<footer class="footer bg-blackblue  container text-white text-center text-[15px] mr-10 ml-10 rounded-3xl p-5">
  <div class="container mx-auto">
    <p>&copy; <span id="currentYear"></span> Your Website. All rights reserved.</p>
  </div>
</footer>

<script>
  document.getElementById("currentYear").textContent = new Date().getFullYear();
</script>
</body>
</html>