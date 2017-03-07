function getPolygonSquare(n) {
    if (n <= 0 || !n) {
        return 0
    } else {
        return n * n + (n - 1) * (n - 1)
    }
}

getPolygonSquare()
