# 概要

https://mzmjp.net/blog/ のWordPress用のテーマです。

# 特殊なファイル

src/header.php  
ルート直下のheader.phpは自動で出力されるのでさわらない

src/sass/dist.scss  
dist.scssを編集すると圧縮されて、dist.cssが出力される
出力されたdist.cssの内容がsrc/header.phpにインクルードされて、header.phpが出力される

# npm コマンド

## 作業開始

```
npm run gulp
```

## Prettierの設定通りにファイルが整形されているかチェック

```
npm run format:check
```

## Prettierでファイルを自動で整形する

```
npm run format
```
