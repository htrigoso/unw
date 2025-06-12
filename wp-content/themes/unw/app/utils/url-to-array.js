export function URLToArray (url) {
  const str = url.replace(/(^\w+:|^)\/\//, '')

  return str.split('/').filter((val) => val != null)
}
