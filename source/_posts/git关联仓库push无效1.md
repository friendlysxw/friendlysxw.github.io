---
title: "git pull报错 (fatal: refusing to merge unrelated histories) 的解决方案1"
categories:
  - 工具
tags:
  - git
comments: true
abbrlink: 62daca3c
date: 2018-11-29 15:42:06
---

### 本地仓库与远程仓库连接后，向远处仓库推送代码（git push）时报错：

~~~git
error: failed to push some refs to 'https://github.com/friendlysxw/shop_app.git'
~~~

### 说无法提交，然后提示我们可以尝试先pull(本地与远程合并,不会覆盖):

~~~git
hint: 'git pull ...') before pushing again.
~~~

### git pull时又报错,说检查本地仓库与远程仓库的分支没有任何关系,无法合并:

~~~git
fatal: refusing to merge unrelated histories
~~~

### 最终的解决方案是: 

 `git pull`时使用这个强制的方法 ：

~~~
git pull origin master --allow-unrelated-histories
~~~

后面的 `--allow-unrelated-histories` ， 是为了把两个不相干的 分支进行强行合并 



然后再 `git push` 就ok啦 😎 