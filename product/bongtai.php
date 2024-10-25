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

      <?PHP
      // $parts = parse_url($_SERVER["REQUEST_URI"]);
      // parse_str($parts['query'], $query);
      // echo $query['email'];
      ?>

      <span class='font-semibold text-3xl mt-2 ml-72'>Tìm kiếm</span>
      <span class='font-semibold text-lg mt-2 ml-72'>Hiển thị kết quả tìm kiếm cho: <span class='font-normal'>"{searchParams.get('q')}"</span></span>

      <div class='grid grid-cols-5 w-2/3 mx-auto mt-5 gap-10 mb-20'>
        <!-- {
        data?.filter(e => e.tenSach.toLowerCase().includes(searchParams.get('q')!)).map(e =>
        <Image key={e.maSach} src={e.maSach} title={e.tenSach} />
        )
        } -->
      </div>

    </div>

    <!-- {/* Footer */} -->
    <!-- <Footer /> -->
    <?php include_once(dirname(__FILE__) . "/../bar/footer.php") ?>
  </div>
</body>

</html>