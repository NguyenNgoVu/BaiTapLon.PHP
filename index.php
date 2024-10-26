<?PHP define("HTTP_ROOT", "."); ?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <title>Document</title>
</head>


<body>
  <div class="flex flex-col font-sans select-none">

    <!-- {/* Header */} -->
    <!-- <Header /> -->
    <?php include_once(dirname(__FILE__) . "/bar/header.php") ?>

    <!-- {/* Body */} -->
    <div class='flex h-full w-full flex-col mb-32 mt-20'>

      <!-- {/* ACTUAL BODY */} -->

      <img src='/public/bia.png' class='w-[90%] justify-center mx-auto border-2 border-[#01a14b] rounded-lg' />

      <div class='flex flex-row justify-center gap-10 mt-5 font-bold mb-20 cursor-default select-none'>
        <div class='border-2 border-[#01a14b] h-20 w-52 p-2 items-center flex uppercase text-center gap-5 text-[#01a14b]'>
          <svg fill='#01A14B' height='60px' width='60px' viewBox='0 0 512 512' stroke='#01A14B' class="m-auto">
            <path d='M476.158,286.938l-13.259-53.035c3.625-0.77,6.345-3.986,6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392 v-17.637c0-9.136-7.432-16.568-16.568-16.568H246.32l68.24-27.296c4.111-1.644,6.11-6.31,4.466-10.421 c-1.644-4.11-6.307-6.111-10.421-4.466l-55.874,22.349c17.026-10.924,33.871-22.947,40.284-31.355 c12.485-16.369,9.323-39.843-7.046-52.328c-16.369-12.486-39.843-9.323-52.328,7.046c-9.122,11.962-21.158,45.573-28.948,69.258 c-7.79-23.683-19.826-57.296-28.948-69.258c-12.484-16.369-35.959-19.53-52.328-7.046c-16.369,12.484-19.53,35.958-7.046,52.328 c6.413,8.409,23.257,20.431,40.284,31.355l-55.874-22.349c-4.113-1.647-8.777,0.355-10.421,4.466 c-1.645,4.111,0.355,8.777,4.466,10.421l68.24,27.296H50.772c-9.136,0-16.568,7.432-16.568,16.568v145.37 c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-145.37c0-0.295,0.239-0.534,0.534-0.534h307.841 c0.295,0,0.534,0.239,0.534,0.534v145.372c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-9.088h94.566 c0.009,0,0.016,0.002,0.025,0.002s0.017-0.001,0.026-0.001c11.636,0.009,21.516,7.647,24.908,18.171h-24.928 c-4.427,0-8.017,3.589-8.017,8.017v17.102c0,13.851,11.268,25.119,25.119,25.119h9.086v35.273h-20.962 c-6.886-19.882-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205h-3.86V345.78c0-4.427-3.589-8.017-8.017-8.017 c-4.427,0-8.017,3.589-8.017,8.017v60.392H192.817c-6.886-19.882-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205 H50.772c-0.295,0-0.534-0.239-0.534-0.534v-17.637h34.739c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H8.017 c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h26.188v17.637c0,9.136,7.432,16.568,16.568,16.568h43.304 c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.995,22.777,50.772,50.772,50.772s50.772-22.777,50.772-50.772 c0-0.18-0.012-0.356-0.014-0.534h180.67c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.995,22.777,50.772,50.772,50.772 c27.995,0,50.772-22.777,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h26.203c4.427,0,8.017-3.589,8.017-8.017v-85.511 C512,307.564,496.423,290.022,476.158,286.938z M172.9,121.059c-31.623-19.651-41.003-28.692-43.78-32.334 c-7.123-9.339-5.319-22.732,4.021-29.855c3.85-2.936,8.388-4.355,12.893-4.355c6.422,0,12.776,2.886,16.963,8.376 c7.755,10.168,19.9,44.391,27.918,69.052C185.504,128.757,179.284,125.028,172.9,121.059z M218.473,131.942 c8.018-24.66,20.163-58.882,27.917-69.052c7.123-9.339,20.516-11.142,29.855-4.02c9.34,7.123,11.143,20.516,4.021,29.855 c-2.777,3.641-12.157,12.683-43.778,32.333C230.105,125.026,223.885,128.756,218.473,131.942z M375.182,199.875h60.392 c9.725,0,17.637,7.912,17.637,17.637v0.534h-78.029V199.875z M375.182,286.456V234.08h71.235l13.094,52.376H375.182z M144.835,457.479c-19.155,0-34.739-15.584-34.739-34.739s15.584-34.739,34.739-34.739c19.155,0,34.739,15.584,34.739,34.739 S163.99,457.479,144.835,457.479z M427.023,457.479c-19.155,0-34.739-15.584-34.739-34.739s15.584-34.739,34.739-34.739 c19.155,0,34.739,15.584,34.739,34.739S446.178,457.479,427.023,457.479z M495.967,354.865h-9.086 c-5.01,0-9.086-4.076-9.086-9.086v-9.086h18.171V354.865z'></path>
            <path d='M144.835,406.172c-9.136,0-16.568,7.432-16.568,16.568s7.432,16.568,16.568,16.568c9.136,0,16.568-7.432,16.568-16.568 S153.971,406.172,144.835,406.172z'></path>
            <path d='M427.023,406.172c-9.136,0-16.568,7.432-16.568,16.568s7.432,16.568,16.568,16.568c9.136,0,16.568-7.432,16.568-16.568 S436.159,406.172,427.023,406.172z'></path>
            <path d='M332.96,371.967H213.244c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017H332.96 c4.427,0,8.017-3.589,8.017-8.017S337.388,371.967,332.96,371.967z'></path>
            <path d='M127.733,337.763H25.119c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h102.614 c4.427,0,8.017-3.589,8.017-8.017S132.16,337.763,127.733,337.763z'></path>
            <path d='M127.733,218.046H93.528c-4.427,0-8.017,3.589-8.017,8.017v68.409c0,4.427,3.589,8.017,8.017,8.017 s8.017-3.589,8.017-8.017v-26.188h17.637c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017h-17.637V234.08h26.188 c4.427,0,8.017-3.589,8.017-8.017C135.749,221.636,132.16,218.046,127.733,218.046z'></path>
            <path d='M190.822,272.043c8.023-5.255,13.337-14.317,13.337-24.602c0-16.209-13.186-29.395-29.395-29.395h-21.378 c-4.427,0-8.017,3.589-8.017,8.017v68.409c0,4.427,3.589,8.017,8.017,8.017s8.017-3.589,8.017-8.017v-17.637h13.346l14.722,22.083 c1.545,2.317,4.086,3.571,6.677,3.571c1.529,0,3.073-0.436,4.439-1.348c3.685-2.455,4.68-7.433,2.223-11.116L190.822,272.043z M174.764,260.802h-13.361V234.08h13.361c7.368,0,13.361,5.993,13.361,13.361C188.125,254.809,182.132,260.802,174.764,260.802z'></path>
            <path d='M256,286.456h-26.188v-18.198c0.177,0.012,0.354,0.027,0.534,0.027h17.102c4.427,0,8.017-3.589,8.017-8.017 s-3.589-8.017-8.017-8.017h-17.102c-0.181,0-0.357,0.015-0.534,0.027V234.08H256c4.427,0,8.017-3.589,8.017-8.017 c0-4.427-3.589-8.017-8.017-8.017h-34.205c-4.427,0-8.017,3.589-8.017,8.017v68.409c0,4.427,3.589,8.017,8.017,8.017H256 c4.427,0,8.017-3.589,8.017-8.017S260.427,286.456,256,286.456z'></path>
            <path d='M315.858,286.456H289.67v-18.171h9.086c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017h-9.086V234.08h26.188 c4.427,0,8.017-3.589,8.017-8.017c0-4.427-3.589-8.017-8.017-8.017h-34.205c-4.427,0-8.017,3.589-8.017,8.017v68.409 c0,4.427,3.589,8.017,8.017,8.017h34.205c4.427,0,8.017-3.589,8.017-8.017S320.285,286.456,315.858,286.456z'></path>
          </svg>
          <span>Ưu đãi<br />vận chuyển</span>
        </div>
        <div class='border-2 border-[#01a14b] h-20 w-52 p-2 items-center flex uppercase text-center gap-5 text-[#01a14b]'>
          <svg viewBox='0 0 48 48' fill='none' height='60px' width='60px' class="m-auto">
            <path fill-rule='evenodd' clip-rule='evenodd' d='M43.0901 24.7051C43.6516 25.2666 43.967 26.0309 43.967 26.8262V40.9622C43.967 42.6177 42.6264 43.9592 40.9694 43.9622L26.827 43.9682C26.033 43.9682 25.2694 43.6518 24.7038 43.0893L13.9538 32.3382C13.295 35.478 12.9328 38.986 12.9328 42.8782C12.9328 43.4305 12.4851 43.8782 11.9328 43.8782C11.3805 43.8782 10.9328 43.4305 10.9328 42.8782C10.9328 38.3252 11.4138 34.2606 12.2812 30.6654L4.88078 23.2642C3.70705 22.0935 3.70705 20.1909 4.87983 19.0211L19.0199 4.87909C20.1924 3.70656 22.0916 3.70656 23.2641 4.87909L38.5686 20.1836C38.8548 19.4578 39.1095 18.7345 39.325 18.0254C41.082 12.2463 40.0604 8.97779 35.9698 8.97779C34.4661 8.97779 33.0335 9.17147 31.6729 9.54256C31.1401 9.68787 30.5903 9.37374 30.445 8.84091C30.2997 8.30809 30.6138 7.75835 31.1467 7.61303C32.678 7.19539 34.2875 6.97779 35.9698 6.97779C41.8364 6.97779 43.3255 11.7424 41.2385 18.6072C40.928 19.6285 40.5434 20.675 40.1026 21.7176L43.0901 24.7051ZM12.8847 28.4403L6.29413 21.8491C5.90292 21.4589 5.90292 20.8255 6.29319 20.4362L20.4341 6.29325C20.8256 5.90183 21.4584 5.90183 21.8499 6.2933L37.7158 22.1592C35.9155 26.0045 33.4132 29.6109 31.3633 31.1747C30.9242 31.5097 30.8397 32.1372 31.1747 32.5763C31.5097 33.0154 32.1372 33.0998 32.5763 32.7649C34.7795 31.0841 37.316 27.5288 39.2156 23.659L41.6759 26.1193C41.8616 26.305 41.967 26.5604 41.967 26.8262V40.9622C41.967 41.5141 41.5202 41.9612 40.9672 41.9622L26.8266 41.9682C26.5626 41.9682 26.3058 41.8618 26.1162 41.6732L14.5012 30.057C15.0041 28.2044 15.617 26.4947 16.3237 24.924C17.0577 23.2929 17.8405 21.9358 18.6188 20.8404C19.0749 20.1984 19.4192 19.794 19.5979 19.6153C19.9884 19.2248 19.9884 18.5916 19.5979 18.2011C19.2074 17.8106 18.5742 17.8106 18.1837 18.2011C17.9275 18.4572 17.5108 18.9468 16.9884 19.682C16.1359 20.8819 15.288 22.3518 14.4998 24.1034C13.8919 25.4544 13.3506 26.8995 12.8847 28.4403ZM31.9698 34.9698C33.6255 34.9698 34.9698 33.6255 34.9698 31.9698C34.9698 31.4175 35.4175 30.9698 35.9698 30.9698C36.5221 30.9698 36.9698 31.4175 36.9698 31.9698C36.9698 34.7301 34.7301 36.9698 31.9698 36.9698C29.2095 36.9698 26.9698 34.7301 26.9698 31.9698C26.9698 29.2095 29.2095 26.9698 31.9698 26.9698C32.5221 26.9698 32.9698 27.4175 32.9698 27.9698C32.9698 28.5221 32.5221 28.9698 31.9698 28.9698C30.3141 28.9698 28.9698 30.3141 28.9698 31.9698C28.9698 33.6255 30.3141 34.9698 31.9698 34.9698Z' fill='#01A14B'></path>
          </svg>
          <span>Thể loại<br />phong phú</span>
        </div>
        <div class='border-2 border-[#01a14b] h-20 w-52 p-2 items-center flex uppercase text-center gap-5 text-[#01a14b]'>
          <svg viewBox='0 0 24 24' fill='none' height='60px' width='60px' stroke='#01A14B' class="m-auto">
            <path d='M13.3057 18.2975L8.23724 19.987C5.47183 20.9088 4.08912 21.3697 3.35924 20.6398C2.62936 19.9099 3.09026 18.5272 4.01207 15.7618L5.70156 10.6933C6.46758 8.39525 6.85059 7.24623 7.75684 7.03229C8.6631 6.81835 9.51953 7.67478 11.2324 9.38764L14.6114 12.7666C16.3242 14.4795 17.1807 15.3359 16.9667 16.2422' stroke='#01A14B' strokeWidth='1.5' strokeLinecap='round'></path>
            <path d='M12.2351 18.3461C12.2351 18.3461 11.477 16.0649 11.477 14.5552C11.477 13.0454 12.2351 10.7643 12.2351 10.7643M8.06517 19.4833C8.06517 19.4833 7.42484 16.7314 7.307 14.9343C7.11229 11.965 8.06517 7.35254 8.06517 7.35254' stroke='#01A14B' strokeWidth='1.5' strokeLinecap='round'></path>
            <path d='M14.5093 10.0061L14.6533 9.28614C14.7986 8.55924 15.3224 7.96597 16.0256 7.73155C16.7289 7.49714 17.2526 6.90387 17.398 6.17697L17.542 5.45703' stroke='#01A14B' strokeWidth='1.5' strokeLinecap='round'></path>
            <path d='M17.5693 13.2533L17.7822 13.3762C18.4393 13.7556 19.2655 13.6719 19.8332 13.1685C20.3473 12.7126 21.0794 12.597 21.709 12.8723L22.0005 12.9997' stroke='#01A14B' strokeWidth='1.5' strokeLinecap='round'></path>
            <path d='M9.79513 2.77903C9.45764 3.33109 9.54223 4.04247 9.99976 4.5L10.0976 4.59788C10.4908 4.99104 10.6358 5.56862 10.4749 6.10085' stroke='#01A14B' strokeWidth='1.5' strokeLinecap='round'></path>
            <path d='M6.92761 3.94079C7.13708 3.73132 7.47669 3.73132 7.68616 3.94079C7.89563 4.15026 7.89563 4.48988 7.68616 4.69935C7.47669 4.90882 7.13708 4.90882 6.92761 4.69935C6.71814 4.48988 6.71814 4.15026 6.92761 3.94079Z' fill='#01A14B'></path>
            <path d='M12.1571 7.1571C12.3666 6.94763 12.7062 6.94763 12.9157 7.1571C13.1251 7.36657 13.1251 7.70619 12.9157 7.91566C12.7062 8.12512 12.3666 8.12512 12.1571 7.91566C11.9476 7.70619 11.9476 7.36657 12.1571 7.1571Z' fill='#01A14B'></path>
            <path d='M17.1571 10.1571C17.3666 9.94763 17.7062 9.94763 17.9157 10.1571C18.1251 10.3666 18.1251 10.7062 17.9157 10.9157C17.7062 11.1251 17.3666 11.1251 17.1571 10.9157C16.9476 10.7062 16.9476 10.3666 17.1571 10.1571Z' fill='#01A14B'></path>
            <path d='M19.0582 15.3134C19.2677 15.1039 19.6073 15.1039 19.8168 15.3134C20.0262 15.5228 20.0262 15.8624 19.8168 16.0719C19.6073 16.2814 19.2677 16.2814 19.0582 16.0719C18.8488 15.8624 18.8488 15.5228 19.0582 15.3134Z' fill='#01A14B'></path>
            <path d='M19.3615 7.71436C18.6912 8.38463 19.1722 10.328 19.1722 10.328C19.1722 10.328 21.1156 10.809 21.7859 10.1387C22.4958 9.42884 22.0941 8.49708 21.0002 8.5C21.0032 7.40615 20.0714 7.00447 19.3615 7.71436Z' stroke='#01A14B' strokeLinejoin='round'></path>
            <path d='M15.1884 3.41748L15.1608 3.51459C15.1305 3.62126 15.1153 3.67459 15.1225 3.72695C15.1296 3.77931 15.1583 3.82476 15.2157 3.91567L15.2679 3.99844C15.4698 4.31836 15.5707 4.47831 15.5019 4.60915C15.4332 4.73998 15.2402 4.75504 14.8544 4.78517L14.7546 4.79296C14.6449 4.80152 14.5901 4.8058 14.5422 4.83099C14.4943 4.85618 14.4587 4.89943 14.3875 4.98592L14.3226 5.06467C14.072 5.36905 13.9467 5.52124 13.8038 5.50167C13.6609 5.4821 13.595 5.30373 13.4632 4.94699L13.4291 4.85469C13.3916 4.75332 13.3729 4.70263 13.3361 4.66584C13.2993 4.62905 13.2486 4.61033 13.1472 4.57287L13.0549 4.53878C12.6982 4.40698 12.5198 4.34108 12.5003 4.19815C12.4807 4.05522 12.6329 3.92992 12.9373 3.67932L13.016 3.61448C13.1025 3.54327 13.1458 3.50767 13.1709 3.45974C13.1961 3.41181 13.2004 3.35699 13.209 3.24735L13.2168 3.14753C13.2469 2.76169 13.262 2.56877 13.3928 2.50001C13.5236 2.43124 13.6836 2.53217 14.0035 2.73403L14.0863 2.78626C14.1772 2.84362 14.2226 2.8723 14.275 2.87947C14.3273 2.88664 14.3807 2.87148 14.4873 2.84117L14.5845 2.81358C14.9598 2.70692 15.1475 2.65359 15.2479 2.75402C15.3483 2.85445 15.295 3.04213 15.1884 3.41748Z' stroke='#01A14B'></path>
          </svg>
          <span>Khuyến mãi<br />hấp dẫn</span>
        </div>
        <div class='border-2 border-[#01a14b] h-20 w-52 p-2 items-center flex uppercase text-center gap-5 text-[#01a14b]'>
          <svg fill='#01A14B' viewBox='0 0 32 32' height='50px' width='50px' stroke='#01A14B' class="m-auto">
            <path d='M18.037 6.635c-0.011-0.001-0.023-0.001-0.035-0.001-0.414 0-0.75 0.336-0.75 0.75 0 0.399 0.312 0.726 0.706 0.749l0.002 0c3.533 0.231 6.311 3.153 6.311 6.723 0 0.186-0.008 0.37-0.022 0.552l0.002-0.024c0 0.414 0.336 0.75 0.75 0.75s0.75-0.336 0.75-0.75v0c0.009-0.143 0.014-0.31 0.014-0.479 0-4.38-3.397-7.967-7.7-8.269l-0.026-0.001zM17.963 2.749c0.449 0.022 10.998 0.688 10.998 12.635 0 0.414 0.336 0.75 0.75 0.75s0.75-0.336 0.75-0.75v0c0.015-0.238 0.024-0.515 0.024-0.795 0-7.059-5.471-12.841-12.405-13.335l-0.043-0.002c-0.009-0-0.019-0.001-0.029-0.001-0.403 0-0.732 0.314-0.757 0.71l-0 0.002c-0.001 0.011-0.001 0.024-0.001 0.037 0 0.401 0.315 0.729 0.711 0.749l0.002 0zM30.637 23.15c-0.109-0.675-0.334-1.281-0.654-1.823l0.013 0.024c-0.114-0.186-0.301-0.317-0.521-0.353l-0.004-0.001-8.969-1.424c-0.035-0.006-0.076-0.009-0.117-0.009-0.207 0-0.395 0.083-0.531 0.218l0-0c-0.676 0.68-1.194 1.516-1.496 2.451l-0.012 0.044c-4.016-1.64-7.141-4.765-8.742-8.675l-0.038-0.105c0.978-0.314 1.814-0.833 2.493-1.509l-0 0c0.136-0.136 0.22-0.324 0.22-0.531 0-0.041-0.003-0.081-0.010-0.12l0.001 0.004-1.425-8.969c-0.036-0.224-0.167-0.412-0.35-0.524l-0.003-0.002c-0.505-0.301-1.094-0.522-1.724-0.626l-0.029-0.004c-0.315-0.070-0.677-0.111-1.048-0.111-0.025 0-0.050 0-0.075 0.001l0.004-0h-0.006c-3.497 0.024-6.326 2.855-6.347 6.351v0.002c0.015 12.761 10.355 23.102 23.115 23.117h0.002c3.5-0.023 6.331-2.854 6.354-6.351v-0.002c0-0.020 0-0.044 0-0.068 0-0.356-0.036-0.703-0.106-1.038l0.006 0.033zM24.383 29.076c-11.933-0.014-21.602-9.684-21.616-21.616v-0.001c0.019-2.673 2.182-4.835 4.854-4.853h0.002c0.016-0 0.036-0 0.055-0 0.272 0 0.537 0.030 0.793 0.086l-0.024-0.005c0.366 0.060 0.695 0.161 1.003 0.3l-0.025-0.010 1.302 8.202c-0.628 0.528-1.404 0.901-2.257 1.050l-0.029 0.004c-0.355 0.064-0.62 0.37-0.62 0.739 0 0.088 0.015 0.172 0.043 0.25l-0.002-0.005c1.772 5.072 5.695 8.994 10.646 10.729l0.121 0.037c0.073 0.026 0.157 0.041 0.245 0.041 0.368 0 0.674-0.265 0.737-0.615l0.001-0.005c0.153-0.882 0.526-1.658 1.061-2.295l-0.006 0.007 8.201 1.303c0.133 0.294 0.237 0.636 0.296 0.994l0.003 0.024c0.046 0.219 0.073 0.471 0.073 0.729 0 0.018-0 0.035-0 0.053l0-0.003c-0.016 2.675-2.179 4.84-4.852 4.859h-0.002z'></path>
          </svg>
          <span>Liên hệ:<br />09 9999 9999<br />08 8888 8888</span>
        </div>
      </div>

      <div class="flex flex-col w-3/4 mx-auto">
        <div id='bongtai' class="flex flex-col mb-10">
          <span class="text-2xl font-semibold underline">Bông tai</span>

          <div class="flex flex-row mx-auto gap-16 my-5">

            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afec600027f2da1_1_7544bba6aac8473a8228147cea840c92_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Bông tai Quý</span>
              </div>
            </div>
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afec600027f2da1_1_7544bba6aac8473a8228147cea840c92_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Bông tai Quý</span>
              </div>
            </div>
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afec600027f2da1_1_7544bba6aac8473a8228147cea840c92_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Bông tai Quý</span>
              </div>
            </div>
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afec600027f2da1_1_7544bba6aac8473a8228147cea840c92_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Bông tai Quý</span>
              </div>
            </div>
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afec600027f2da1_1_7544bba6aac8473a8228147cea840c92_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Bông tai Quý</span>
              </div>
            </div>

          </div>

          <a href="/search.php?c=bongtai" class="mx-auto border-2 border-[#01a14b] rounded-md px-4 py-2 mt-4 hover:bg-[#01a14b] hover:text-white">Xem thêm</a>

        </div>

        <div id='nhan' class="flex flex-col mb-10">
          <span class="text-xl font-semibold underline">Nhẫn cưới</span>

          <div class="flex flex-row mx-auto gap-16 my-5">
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afrj000124f1cz1_1_940a6055332c4af7aed9066619ed54c4_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Nhẫn cưới Quý</span>
              </div>
            </div>
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afrj000124f1cz1_1_940a6055332c4af7aed9066619ed54c4_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Nhẫn cưới Quý</span>
              </div>
            </div>
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afrj000124f1cz1_1_940a6055332c4af7aed9066619ed54c4_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Nhẫn cưới Quý</span>
              </div>
            </div>
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afrj000124f1cz1_1_940a6055332c4af7aed9066619ed54c4_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Nhẫn cưới Quý</span>
              </div>
            </div>
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afrj000124f1cz1_1_940a6055332c4af7aed9066619ed54c4_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Nhẫn cưới Quý</span>
              </div>
            </div>

          </div>

          <a href="/search.php?c=nhan" class="mx-auto border-2 border-[#01a14b] rounded-md px-4 py-2 mt-4 hover:bg-[#01a14b] hover:text-white">Xem thêm</a>

        </div>

        <div id='vong' class="flex flex-col mb-10">
          <span class="text-xl font-semibold underline">Vòng tay</span>

          <div class="flex flex-row mx-auto gap-16 my-5">
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afgc000003d2da1_1_617cef0bbb8d4b02993f2f21b0f7a89a_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Vòng tay Quý</span>
              </div>
            </div>
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afgc000003d2da1_1_617cef0bbb8d4b02993f2f21b0f7a89a_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Vòng tay Quý</span>
              </div>
            </div>
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afgc000003d2da1_1_617cef0bbb8d4b02993f2f21b0f7a89a_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Vòng tay Quý</span>
              </div>
            </div>
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afgc000003d2da1_1_617cef0bbb8d4b02993f2f21b0f7a89a_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Vòng tay Quý</span>
              </div>
            </div>
            <div class="w-60 h-64 flex flex-col relative rounded-xl border-2 border-[#01a14b]">
              <img class="rounded-xl h-52" src="https://product.hstatic.net/200000567741/product/afgc000003d2da1_1_617cef0bbb8d4b02993f2f21b0f7a89a_master.jpg" alt="">
              <div class="w-full h-11 rounded-b-xl">
                <hr class="w-5/6 mx-auto border border-[#01a14b]" />
                <span class="ml-3">Vòng tay Quý</span>
              </div>
            </div>
          </div>

          <a href="/search.php?c=vong" class="mx-auto border-2 border-[#01a14b] rounded-md px-4 py-2 mt-4 hover:bg-[#01a14b] hover:text-white">Xem thêm</a>

        </div>

      </div>

    </div>

    <!-- {/* Footer */} -->
    <!-- <Footer /> -->
    <?php include_once(dirname(__FILE__) . "/bar/footer.php") ?>
  </div>
</body>

</html>