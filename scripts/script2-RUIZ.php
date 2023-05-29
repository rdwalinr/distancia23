<?php
/**
 * script2-RUIZ
 *
 * Este script contiene la clase "Calculadora" que realiza operaciones de multiplicación y división.
 * Fue creado por Rubén Ruiz Mejias.
 * @copyrigth 2023
 * @version 1.0.1
 * @see Calculadora
 *
 */

/**
 * Clase Calculadora
 *
 * Esta clase representa una calculadora que puede realizar operaciones de multiplicación y división.
 */
class Calculadora
{
    /**
     * Método multiplicacion
     *
     * Realiza la multiplicación de dos números.
     *
     * @param float $num1 El primer número.
     * @param float $num2 El segundo número.
     * @return float El resultado de la multiplicación.
     * @version 1.0
     */
    public function multiplicacion($num1, $num2)
    {
        return $num1 * $num2;
    }

    /**
     * Método division
     *
     * Realiza la división de dos números.
     *
     * @param float $num1 El numerador.
     * @param float $num2 El denominador.
     * @return float El resultado de la división.
     * @throws Exception Si el denominador es cero.
     * @version 1.0
     */
    public function division($num1, $num2)
    {
        if ($num2 == 0) {
            throw new Exception("Error: División por cero.");
        }
        return $num1 / $num2;
    }
}

// Ejemplo de uso de la clase Calculadora
$calculadora = new Calculadora();
echo "Actividad 2 - Script2-RUIZ.php - Clase Calculadora";

$resultadoMultiplicacion = $calculadora->multiplicacion(5, 2);
echo "<br/> Resultado de la multiplicación: " . $resultadoMultiplicacion;

$resultadoDivision = $calculadora->division(10, 2);
echo "<br/> Resultado de la división: " . $resultadoDivision;
