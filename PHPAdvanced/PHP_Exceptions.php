<!DOCTYPE html>
<html>

<body>
    <?php
    function divide($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide(5, 0);
    } catch (Exception $e) {
        echo "Unable to divide. ";
    } finally {
        echo "Process complete" . "<br>";
    }
    ?>

    <?php
    function divide2($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero", 1);
        }
        return $dividend / $divisor;
    }

    try {
        echo divide2(5, 0);
    } catch (Exception $ex) {
        $code = $ex->getCode();
        $message = $ex->getMessage();
        $file = $ex->getFile();
        $line = $ex->getLine();
        echo "Exception thrown in $file on line $line: [Code $code]
  $message";
    }
    ?>

</body>

</html>