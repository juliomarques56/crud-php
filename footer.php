      <script src="src/js/jquery.js"></script>
      <script src="src/js/bootstrap.js"></script>
      <script src="src/js/popper.js"></script>
      <script src="src/js/main.js"></script>
      <script>
        function validaSenha (input){ 
          if (input.value != document.getElementById('txtSenha').value) {
            input.setCustomValidity('Repita a senha corretamente');
          } else {
            input.setCustomValidity('');
          }
        } 
      </script>
</body>
</html>