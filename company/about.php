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
  <div class='flex font-sans flex-col select-none'>

    <!-- {/* Header */} -->
    <!-- <Header /> -->
    <?php include_once(dirname(__FILE__) . "/../bar/header.php") ?>

    <?php echo 'console.log(' . file_exists("bar/header.php") ? 'true' : 'false' . ')' ?>

    <!-- {/* Body */} -->
    <div class='flex h-full w-full flex-col mb-32 mt-20'>

      <div class='mx-72'>
        <p class='text-2xl font-bold'>NguyenNgoNguyen - Nơi Thỏa Mãn Đam Mê Đọc Truyện Của Bạn</p>

        <p class='text-lg mt-2'><span class='font-semibold text-lg'>NguyenNgoNguyen</span> là trang web bán truyện online uy tín dành cho những tín đồ yêu thích thế giới văn học muôn màu. Tại đây, bạn có thể tìm thấy vô số đầu sách thuộc mọi thể loại, từ ngôn tình lãng mạn, trinh thám gay cấn đến khoa học viễn tưởng kỳ ảo, đảm bảo đáp ứng mọi sở thích và nhu cầu của bạn.</p>

        <p class='text-xl mt-5 font-semibold'>Điểm nổi bật của NguyenNgoVu:</p>

        <p><span class='font-semibold text-2xl justify-center mr-2'>&#187;</span><span class='italic underline text-lg'>Kho tàng sách phong phú và đa dạng:</span> Nơi đây sở hữu số lượng lớn các đầu sách thuộc nhiều thể loại khác nhau, từ sách Việt Nam đến sách nước ngoài, cập nhật liên tục những tác phẩm mới nhất và hot nhất trên thị trường.</p>
        <p><span class='font-semibold text-2xl justify-center mr-2'>&#187;</span><span class='italic underline text-lg'>Giá cả hợp lý:</span> <span class='font-semibold'>NguyenNgoVu</span> luôn mang đến mức giá cạnh tranh cho các sản phẩm, đi kèm với nhiều chương trình khuyến mãi hấp dẫn, giúp bạn tiết kiệm tối đa chi phí mua sắm.</p>
        <p><span class='font-semibold text-2xl justify-center mr-2'>&#187;</span><span class='italic underline text-lg'>Dịch vụ chuyên nghiệp:</span> Đội ngũ nhân viên tận tâm, chu đáo luôn sẵn sàng tư vấn và hỗ trợ bạn lựa chọn được những cuốn sách phù hợp nhất.</p>
        <p><span class='font-semibold text-2xl justify-center mr-2'>&#187;</span><span class='italic underline text-lg'>Giao hàng nhanh chóng:</span> Hệ thống giao hàng chuyên nghiệp, đảm bảo vận chuyển sách đến tay bạn một cách nhanh chóng và an toàn.</p>

        <p class='text-lg mt-5'><span class='font-semibold text-xl justify-center mr-2'>&#8658;</span>Truy cập ngay <span class='font-semibold'>NguyenNgoVu</span> để khám phá kho tàng sách khổng lồ và đắm chìm trong những câu chuyện ly kỳ, hấp dẫn. Hãy để <span class='font-weight: 600;'>NguyenNgoVu</span> đồng hành cùng bạn trên hành trình chinh phục tri thức và nuôi dưỡng niềm đam mê đọc sách!</p>

        <p class='text-xl mt-10 font-semibold'>Thông tin liên hệ:</p>

        <p><span class='font-semibold text-2xl justify-center mr-2 '>&#187;</span><span class='italic underline text-lg'>Website:</span>
          <Link href='https://nguyenngovu.com'>https://norwayniggervtuber.com/</Link>
        </p>
        <p><span class='font-semibold text-2xl justify-center mr-2 '>&#187;</span><span class='italic underline text-lg'>Fanpage:</span>
          <Link href='https://www.facebook.com/100016773610729'>https://www.facebook.com/100016773610729/</Link>
        </p>
        <p><span class='font-semibold text-2xl justify-center mr-2 '>&#187;</span><span class='italic underline text-lg'>Hotline:</span> 09 9999 9999</p>

        <p class='text-xl font-semibold mt-10'>Hãy đến với NguyenNgoVu và trải nghiệm dịch vụ mua sắm truyện online hoàn hảo nhất!</p>
      </div>

    </div>

    <!-- {/* Footer */} -->
    <!-- <Footer /> -->
    <?php include(dirname(__FILE__) . "/../bar/footer.php") ?>
  </div>
</body>

</html>