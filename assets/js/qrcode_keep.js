document.addEventListener("DOMContentLoaded", function () {
  var modal = document.getElementById('id01');

  window.onclick = function (event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  };

  const qrcode = new QRCode(document.getElementById('qrcode'), {
      text: window.location.href,
      width: 128,
      height: 128,
      colorDark: '#000',
      colorLight: '#fff',
      correctLevel: QRCode.CorrectLevel.H
  });

  const keepButton = document.querySelector('.keepButton');
  const countDisplay = document.querySelector('.keep .count');

  if (keepButton && countDisplay) {
    keepButton.addEventListener('click', function () {
          modal.style.display = "block";

          fetch(keep_ajax.ajax_url, {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/x-www-form-urlencoded'
              },
              body: new URLSearchParams({
                  action: 'increment_keep_count',
                  post_id: keep_ajax.post_id,
                  nonce: keep_ajax.nonce
              })
          }).then(res => res.json())
            .then(data => {
                if (data.success) {
                    countDisplay.textContent = data.data.new_count;
                } else {
                    console.error('Failed to update');
                }
            }).catch(err => {
                console.error('AJAX error:', err);
            });
      });
  }
});