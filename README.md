# php_todo2

html_todoをベースにした、phpによるtodoアプリの作成

■作成の方針

・画面ファイルは可能な限りPHPコードは書かない

・画面ファイルはパラメータの取得と表示にPHPコードを使う

・画面ファイルのボタンは全てform-submitとして、formのリンク先は処理を担当するlogicファイルとする

・logicファイルは、画面ファイルからパラメータを受け取る、DAOのメソッドを呼び出してDBにアクセスする、
　DAOの戻り値をセッションに保存する、画面ファイルへリダイレクトする、条件分岐を行う
 
・DAOはlogicファイルからパラメータを受け取る、DBへの接続を行う、SQLを実行する、
　実行結果のリストを作成する、実行結果を戻り値として返す

■開発終了
2019/12/30
学習の目標を達成して開発を終了

■成果
・PHPについて、CRUDを一通り動作させる事ができた。
・gitについて、sourcetreeでコミット、プッシュを使い、更新情報のコメントを残した。

■課題
・今回はCRUDに関する最低限の動作にとどまった
・入力チェックや例外処理が不完全
・コーディングが統一されていない
・設計の方針について、再検討したい
　（画面表示ファイルごとに、表示に必要なデータを一括して用意するファイルを設ける、等）
 ・sourcetreeやgithubについて、ごく一部の機能しか使っていない
 ・コミットのタイミングやコメントの表記を最適化したい
 
■今後の方針
・現行の機能に大きな変更は加えず、設計から再構成する
・入力チェックや例外処理等の機能を追加する
・sourcetree,githubについて学習する

 
