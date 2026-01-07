  </div>

  <?php if (isset($_SESSION['message'])): ?>
<div id="toast" 
     class="fixed bottom-6 right-6 z-50 flex items-center gap-3 w-[340px] p-4 
            bg-white border border-slate-200 rounded-xl shadow-lg">

    <!-- Icon -->
    <i class="ri-checkbox-circle-line text-green-600 text-2xl"></i>

    <!-- Message -->
    <p class="text-sm text-slate-800 font-medium">
        <?= htmlspecialchars($_SESSION['message']) ?>
    </p>

    <!-- Close -->
    <button onclick="document.getElementById('toast').remove()" 
            class="ml-auto text-slate-400 hover:text-slate-600">
        <i class="ri-close-line text-lg"></i>
    </button>
</div>

<script>
// Auto-hide setelah 4 detik
setTimeout(() => {
    const toast = document.getElementById('toast');
    if (toast) toast.remove();
}, 4000);
</script>

<?php unset($_SESSION['message']); ?>
<?php endif; ?>

  <script src="js/main.js"></script>
</body>
</html>
