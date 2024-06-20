"https://{all}/": { type: upstream, upstream: "varnish:http", cache: { enabled: false } }
"http://{all}/": { type: redirect, to: "https://{all}/" }

"https://spa.{all}/": { type: upstream, upstream: "spa:http" }
"http://spa.{all}/": { type: redirect, to: "https://spa.{all}/" }