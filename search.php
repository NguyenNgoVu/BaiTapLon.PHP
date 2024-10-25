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
    <?php include_once(dirname(__FILE__) . "/bar/header.php") ?>

    <!-- {/* Body */} -->
    <div class='flex h-full w-full flex-col mb-32 mt-20'>

      <?PHP
      $parts = @parse_url($_SERVER["REQUEST_URI"]);
      @parse_str($parts['query'], $query);

      // q = name
      // c = catergory
      ?>

      <span class='font-semibold text-3xl mt-2 ml-72'>Tìm kiếm</span>
      <span class='font-semibold text-lg mt-2 ml-72'>Hiển thị kết quả tìm kiếm cho: <span class='font-normal'><?PHP echo @($query['q']) ?></span></span>

      <?PHP
      if (empty($query) || empty(@$query['q'])) {
        echo "<span class='text-center font-semibold text-2xl'>Vui lòng nhập sản phẩm cần tìm!</span>";
      } else {
        echo "<div class='grid grid-cols-4 w-2/3 mx-auto mt-5 mb-20 gap-y-14'>";
        $a = array("a_bongtai", "b_nhancuoi", "c_bongtai", "d_nhancuoi", "e_nhancuoi", "f_bongtai", "g_vongtay", "h_vongtay", "i_vongtay", "k_vongtay");
        for ($i = 0; $i < count($a); $i++) {
          if (str_contains($a[$i], @$query['c'])) {
            echo "<a href='/Book/$i' class='w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b] mx-auto'>";
            echo "  <img class='rounded-xl h-52' src='https://product.hstatic.net/200000567741/product/afec600027f2da1_1_7544bba6aac8473a8228147cea840c92_master.jpg' alt='' />";
            echo "  <div class='w-full h-11 rounded-b-xl'>";
            echo "    <hr class='w-5/6 mx-auto border border-[#01a14b]' />";
            echo "    <span class='ml-3'>$a[$i]</span>";
            echo "  </div>";
            echo "</a>";
          }
        }
        echo "</div>";
      }
      ?>

    </div>

    <!-- {/* Footer */} -->
    <!-- <Footer /> -->
    <?php include_once(dirname(__FILE__) . "/bar/footer.php") ?>
  </div>
</body>

</html>