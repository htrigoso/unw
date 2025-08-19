import SearchInput from '../../components/SearchInput'

(function () {
  document.querySelectorAll('.search-input').forEach(element => {
    new SearchInput({ element })
  })
})()
