function totalAptCost(bldg) {
  var totalCost = 0,
      unsuitable = [];
  for (var i=0; i<bldg.length; i++) {
    for (var u=0; u<bldg[i].length; u++) {
      if (bldg[i][u] === 0 && unsuitable.indexOf(u) == -1) {
        unsuitable.push(u);
      }
      if (unsuitable.indexOf(u) == -1) {
        totalCost += bldg[i][u];
      }
    }
  }
  return totalCost;
}
