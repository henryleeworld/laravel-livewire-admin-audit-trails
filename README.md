# Laravel 10 Livewire 後臺管理稽核軌跡

不論從個人資料保護法的角度或從資訊安全的要求，保護資料避免不當的存取或外洩，一直是重要課題。再嚴謹的資料防護措施，都可能存在著安全漏洞，因此資料存取紀錄可以說是資安保護的基礎。

## 使用方式
- 打開 php.ini 檔案，啟用 PHP 擴充模組 gd，並重啟服務器。
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 執行 __Artisan__ 指令的 __storage:link__ 來建立連結符號，讓公用可存取的檔案維持在一個目錄中。
```sh
$ php artisan storage:link
```
- 運行單元測試和功能測試。大多數的單元測試可能只專注於單一個方法，功能測試則可以測試大部分的程式碼，包含一些物件如何進行互動，甚至是完整的 HTTP 請求到一個 JSON 端點。
```sh
$ php artisan test
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/0pFG7cB.png)
> 檢查程式碼是否如預期般執行

![](https://i.imgur.com/4V7gGwa.png)
> 知道個人執行那些應用系統功能

![](https://i.imgur.com/n8logD6.png)
> 紀錄應用系統的存取軌跡，協助完整保留稽核紀錄
