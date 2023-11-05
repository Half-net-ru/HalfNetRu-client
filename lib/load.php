<?php
class Load {
    function posts_10() {
        $dsn = 'mysql:dbname=hnr_base;host=127.0.0.1';
        $dblogin = '';
        $dbpasswd = '';
        $dbh = new PDO($dsn, $dblogin, $dbpasswd);
        $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 10";
        $fetch = $dbh->query($sql);
        return $fetch;
    }
    function news_10() {
        $dsn = 'mysql:dbname=hnr_base;host=127.0.0.1';
        $dblogin = '';
        $dbpasswd = '';
        $dbh = new PDO($dsn, $dblogin, $dbpasswd);
        $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 20";
        $fetch = $dbh->query($sql);
        return $fetch;
    }
    function posts_all() {
        $dsn = 'mysql:dbname=hnr_base;host=127.0.0.1';
        $dblogin = '';
        $dbpasswd = '';
        $dbh = new PDO($dsn, $dblogin, $dbpasswd);
        $sql = "SELECT * FROM articles ORDER BY id DESC";
        $fetch = $dbh->query($sql);
        return $fetch;
    }
    function news_all() {
        $dsn = 'mysql:dbname=hnr_base;host=127.0.0.1';
        $dblogin = '';
        $dbpasswd = '';
        $dbh = new PDO($dsn, $dblogin, $dbpasswd);
        $sql = "SELECT * FROM news ORDER BY id DESC";
        $fetch = $dbh->query($sql);
        return $fetch;
    }
    function post($id) {
        $dsn = 'mysql:dbname=hnr_base;host=127.0.0.1';
        $dblogin = '';
        $dbpasswd = '';
        $dbh = new PDO($dsn, $dblogin, $dbpasswd);
        $sql = "SELECT * FROM articles WHERE id = :id";
        $sth = $dbh->prepare($sql);
        $sth->execute(['id' => $id]);
        $fetch = $sth->fetchAll();
        return $fetch;
    }
    function new($id) {
        $dsn = 'mysql:dbname=hnr_base;host=127.0.0.1';
        $dblogin = '';
        $dbpasswd = '';
        $dbh = new PDO($dsn, $dblogin, $dbpasswd);
        $sql = "SELECT * FROM news WHERE id = :id";
        $sth = $dbh->prepare($sql);
        $sth->execute(['id' => $id]);
        $fetch = $sth->fetchAll();
        return $fetch;
    }
}