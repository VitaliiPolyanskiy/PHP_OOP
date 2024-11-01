        <?php
        class MyException extends Exception { }

        class Test {
            public function testing() {
                try {
                    try {
                        throw new MyException('Exception!');
                    } catch (MyException $e) {
                        // повторный выброс исключения
                        echo $e->getMessage();
                        throw $e;
                    }
                } catch (MyException $e) {
                    echo $e->getMessage();
                }
            }
        }

        $a = new Test();
        $a->testing();
        ?>

