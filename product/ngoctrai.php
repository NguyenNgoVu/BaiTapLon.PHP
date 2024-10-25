<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="/public/tailwindcss.js"></script>
  <style>
    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
        'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
        sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    code {
      font-family: source-code-pro, Menlo, Monaco, Consolas, 'Courier New',
        monospace;
    }

    ::-webkit-scrollbar {
      width: 10px;
      border-radius: 1rem;
      background: #ccc;
    }

    ::-webkit-scrollbar-thumb {
      background: #aaa;
      border-radius: 0.75rem;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    @layer utilities {
      .text-balance {
        text-wrap: balance;
      }
    }
  </style>
</head>


<body>
  <div class='flex font-sans flex-col'>

    <!-- {/* Header */} -->
    <!-- <Header /> -->
    <?php include_once(dirname(__FILE__) . "/../bar/header.php") ?>


    <!-- {/* Body */} -->
    <div class='flex h-full w-full flex-col mb-32 mt-20'>

      <?PHP //echo $_SERVER["REQUEST_URI"] 
      ?>

      <div class='mx-72'>
        <span class="font-semibold text-2xl mb-2">Phản hồi ý kiến:</span>

        <textarea name="y_kien" id="y_kien" class="mt-5 mb-16 w-full h-72 outline-none border-2 border-[#01a14b] rounded-lg p-2 resize-none" placeholder="Nhập phản hồi của bạn tại đây..."></textarea>

        <span class='text-2xl font-semibold mb-2'>Check map tại đây:</span>
        <iframe
          src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233.67846158441773!2d106.16306760122339!3d20.430031503456433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e756dae56d0d%3A0x97cbf14af357037e!2zMjQxIMSQaeG7h24gQmnDqm4sIEzhu5ljIEhvw6AsIFRQLiBOYW0gxJDhu4tuaCwgTmFtIMSQ4buLbmg!5e0!3m2!1svi!2s!4v1714743573482!5m2!1svi!2s'
          loading='lazy'
          referrerPolicy='no-referrer-when-downgrade'
          class='rounded-lg w-full h-[50dvh] mt-5 mb-16 border-2 border-[#01a14b]'></iframe>

        <span class='text-2xl mt-5 font-semibold'>Thông tin liên hệ:</span>

        <p>
          <span class='font-semibold text-2xl justify-center mr-2'>&#187;</span>
          <span class='italic underline text-lg'>Website:</span>
          <a target="_blank" href='https://nguyenngovu.com'>https://norwayniggervtuber.com/</a>
        </p>
        <p>
          <span class='font-semibold text-2xl justify-center mr-2'>&#187;</span>
          <span class='italic underline text-lg'>Fanpage:</span>
          <a target="_blank" href='https://www.facebook.com/100016773610729'>https://www.facebook.com/100016773610729/</a>
        </p>
        <p>
          <span class='font-semibold text-2xl justify-center mr-2'>&#187;</span>
          <span class='italic underline text-lg'>Hotline:</span> 09 9999 9999</p>
      </div>

    </div>

    <!-- {/* Footer */} -->
    <!-- <Footer /> -->
    <?php include_once(dirname(__FILE__) . "/../bar/footer.php") ?>
  </div>
</body>

</html>