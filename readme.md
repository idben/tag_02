# 標籤輸入提示系統

這是一個簡單的範例專案，展示如何在一個可編輯的內容區域內實作即時的標籤建議系統。此專案使用了 HTML、CSS 和 JavaScript，並依賴 Bootstrap 進行基本的樣式處理。標籤建議系統的核心功能是透過使用者在輸入過程中檢測井字號（#）開頭的文字片段，並即時向伺服器或本地資料檔案請求相關標籤建議。

## 專案結構

- `index.html`: 主頁面，包含標籤建議系統的主要程式碼。
- `tag.json`: 本地標籤資料檔案，用於模擬伺服器端標籤搜尋的回應。
- `searchHashtags.php`: 對應的 php 程式，由資料庫找出推薦的標籤。

## 展示頁面
- [GitHub Pages](https://idben.github.io/tag_02/).