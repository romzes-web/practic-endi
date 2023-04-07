let expression = prompt("Введите математическое выражение:");

try {
    let result = eval(expression);
    console.log("Результат: ", result);
} catch (e) {
    console.log("Ошибка. Попробуйте еще раз.");
}
