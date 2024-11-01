        <?php
        function inverse($x)
        {
            if (!$x) {
                throw new Exception('Деление на ноль.');
            }
            return 1/$x;
        }
        try
        {
            echo inverse(5) . "<br>";
            echo inverse(0) . "<br>";
            echo inverse(10) . "<br>"; // Выполняться не будет
        }
        catch (Exception $e)
        {
            echo 'Выброшено исключение: ',  $e->getMessage(), "<br>";
        }
        finally
        {
            echo "Блок finally.<br>";
        }
        echo "Продолжение выполнения скрипта<br>";
        ?>
