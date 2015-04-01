from urllib2 import Request, urlopen

headers = {
  'Content-Type': 'application/json',
  'trakt-api-version': '2',
  'trakt-api-key': '[217bf90894b371258dd8b8040889d9f18a0a73a2b4ad84ffb25fc317a77d60bd]'
}
request = Request('https://api-v2launch.trakt.tv/shows/game-of-thrones', headers=headers)

response_body = urlopen(request).read()
print response_body