# Пример использования xhprof

- Клонировать этот репозиторий в <SITE_ROOT_DIR>/xhprof
- В .htaccess сайта добавить

    php_value auto_prepend_file xhprof/xhprof_start.php
    php_value auto_append_file xhprof/xhprof_end.php

- После вывода php будет ссылка на отчет xhprof. Она меняется в xhprof_end.php
  (переменная xhprof_url)

    <!-- xhprof report: http://xhprof.dev/index.php?run=52de63a3cfe62&source=xhprof_test -->
