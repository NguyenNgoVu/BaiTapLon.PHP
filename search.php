<?PHP

$con = mysqli_connect("localhost", "root", "", "qlts", "3307");

if (!$con) {
  echo "Kết nối cơ sở dữ liệu thất bại";
}

function console_log($output, $with_script_tags = true)
{
  $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
  if ($with_script_tags) {
    $js_code = '<script>' . $js_code . '</script>';
  }
  echo $js_code;
}

?>

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

      $name = @$query['q'];
      $category = @$query['c'];

      $res = $con->query("SELECT * FROM `sanpham`");
      $sanpham = $res->fetch_all();
      ?>

      <span class='font-semibold text-3xl mt-2 ml-72'>Tìm kiếm</span>
      <span class='font-semibold text-lg mt-2 ml-72'>Hiển thị kết quả tìm kiếm cho: <span class='font-normal'><?PHP echo @$name ?></span></span>

      <?PHP
      if (empty($query) || (empty(@$query['q']) && empty(@$query['c']))) {
        echo "<span class='text-center font-semibold text-2xl'>Vui lòng nhập sản phẩm cần tìm!</span>";
      } else {
        echo "<div class='grid grid-cols-4 w-2/3 mx-auto mt-5 mb-20 gap-y-14'>";
        for ($i = 0; $i < count($sanpham); $i++) {
          $item = $sanpham[$i];
          if (str_contains(@$item[3], @$query['c'])) {

            $name = explode(" - ", $item[1]);
            $price = number_format($item[2], 0, '.', ',');
            console_log($item);

            echo "<a href='/product/$item[0]' class='w-60 h-[22rem] flex flex-col relative rounded-xl border-2 border-[#01a14b] mx-auto'>";
            echo "  <img class='rounded-xl h-52' src='/public/$item[3]/$item[0].png' alt='' />";
            echo "  <div class='w-full h-full rounded-b-xl relative flex flex-col'>";
            echo "    <hr class='w-5/6 mx-auto border border-[#01a14b]' />";
            echo "    <span class='mx-2 font-semibold text-lg leading-tight mt-2 justify-evenly'>$name[0]</span>";
            echo "    <span class='ml-2 text-sm'>ID: $name[1]</span>";
            echo "    <span class='ml-3 text-xl absolute right-2 bottom-2 text-red-500 font-bold'>$price VNĐ</span>";
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