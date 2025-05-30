/**
 * 
 * @param {number} lines - 行数
 * @param {string} selectors - 选择器
 */
function ellipsis(lines, selectors) {
  if ($(selectors).length === 0) return

  const s = document.querySelector(selectors)
  
  $(selectors).each(function() {
    var lineHeight = Math.ceil($(this).css('lineHeight').slice(0, -2))
    var maxHeight = lineHeight * lines
   
    while ($(this).height() > maxHeight) {
      $(this).text($(this).text().slice(0, -5) + '...')
    }
  })
}