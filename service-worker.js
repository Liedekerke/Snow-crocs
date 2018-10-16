/**
 * Copyright 2016 Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
*/

// DO NOT EDIT THIS GENERATED OUTPUT DIRECTLY!
// This file should be overwritten as part of your build process.
// If you need to extend the behavior of the generated service worker, the best approach is to write
// additional code and include it using the importScripts option:
//   https://github.com/GoogleChrome/sw-precache#importscripts-arraystring
//
// Alternatively, it's possible to make changes to the underlying template file and then use that as the
// new base for generating output, via the templateFilePath option:
//   https://github.com/GoogleChrome/sw-precache#templatefilepath-string
//
// If you go that route, make sure that whenever you update your sw-precache dependency, you reconcile any
// changes made to this original template file with your modified copy.

// This generated service worker JavaScript will precache your site's resources.
// The code needs to be saved in a .js file at the top-level of your site, and registered
// from your pages in order to be used. See
// https://github.com/googlechrome/sw-precache/blob/master/demo/app/js/service-worker-registration.js
// for an example of how you can register this script and handle various service worker events.

/* eslint-env worker, serviceworker */
/* eslint-disable indent, no-unused-vars, no-multiple-empty-lines, max-nested-callbacks, space-before-function-paren, quotes, comma-spacing */
'use strict';

var precacheConfig = [["README.md","7c87ee896ae9b1dad4e74ad4f446d8b5"],["assets/css/jarallax.css","b80225d900588f8298b80d0a248eb1ea"],["assets/css/style.css","ea058f29a7e26746fbb8a4a17d31c44c"],["assets/images/bg1.jpg","203ff5a32933945247a2aa7278edfe95"],["assets/images/bg2.jpg","b3b163db34630f6935f3bdaaa5801014"],["assets/images/dk1.jpg","b4cab1f2880658a2b84538dbce287642"],["assets/images/dk2.jpg","10476321983f5f216b1cca6188df04f4"],["assets/images/dk3.jpg","e5a0f7703d5b4311f774df280a34359a"],["assets/images/favicon.ico","debca6863886d51f990e14765832c593"],["assets/images/image2.jpg","ed7b3d8dfc41730a144f0f1171f5ff44"],["assets/images/image3.jpg","82f6a4bbf44fd79ba28d9805bf967e20"],["assets/images/image4.jpg","1d11353906aac9c418d2c3b07650bfc1"],["assets/images/image5.jpg","a20614137347fafc7742141350acfd83"],["assets/images/imagetest.jpg","a7f52f58dd4ea08adc124b9ab62ff410"],["assets/images/imgtest/bg-menus.jpg","669d746200f7a4874d6721779cea5d17"],["assets/images/imgtest/imgPain.jpg","71788794675a5d67e3d87fbb70f8354f"],["assets/images/imgtest/plat1.jpg","781266b320c6fd8a63bb004cf580d968"],["assets/images/imgtest/plat2.jpg","ea214dabac5062370da3fc116915bc27"],["assets/images/imgtest/plat3.jpg","3b44784790b7e371e01ac747add03624"],["assets/images/imgtest/plat4.jpg","5e5415b07699ffdf41863d5a295963e3"],["assets/images/imgtest/plat5.jpg","a68f29597c157f80e9b5eed169abc645"],["assets/images/imgtest/plat6.jpg","1422ce3638ec3f07cfa9ee9c24d97aee"],["assets/images/imgtest/test.jpg","4a9c9607f470eb41091459fd0e5e33ff"],["assets/images/imgtest/test2.jpg","838c5c4fddf812670e91ac42b19a45cc"],["assets/images/imgtest/test3.jpg","634db39021ffc7356881171b1874fcbc"],["assets/images/imgtest/test4.jpg","c6b55f90505e3ac487500d99619c460d"],["assets/images/splashart.jpg","6e62c3166f9b3715d5a8d61a2b39fe67"],["assets/images/splashart3.jpg","0512867d808261ecea8f62d6b6adad2a"],["assets/images/splshart2.jpg","61e0cf340d93590946b64d24179835e4"],["assets/includes/footer.php","5db63683957fb94a44ba82b5031be1df"],["assets/includes/head.php","8b4acaadad9981456b9ed1f2fbb8f9b9"],["assets/includes/header.php","93f4510039b8ab014a2cc0953947ec28"],["assets/includes/photos.php","d686c691e3527882ea16a7d41e7d1c0c"],["assets/js/fontawesome-all.js","fe059ff80d832fece3437faade7da6a2"],["assets/js/jarallax-0.2.1.js","94ca1c885997341763495ea21b5d24d1"],["assets/js/jarallax-element.js","cd9766a8df5bbd39542f0bc8e1414631"],["assets/js/jarallax-video.js","d20895e5917d8d234fb472c569e2e1b6"],["assets/js/jarallax.js","0e3ae1bce531f034c515871e6454bebf"],["assets/js/jquery-3.3.1.min.js","378087a64e1394fc51f300bb9c11878c"],["assets/manifest.json","6156f1a60e382e1be08884f10b287dfb"],["carte.php","4649207a4e2fe68b2a283d829bb205ab"],["contact.php","a1dc35e93cc007ab9e93a5622e4c795d"],["dessert.php","acfba2f8059c0e30546bef8a101e10f4"],["index.php","2513c6a06b3a3533f4cb908410746df5"],["photo.php","e09fb5e35bf9ebd71c576f382b189eaa"],["plat.php","e1d02f56b6c1ec7bdd99fad4699708f4"],["restaurant.php","fe2e739dcafb06dc3b0911eaeae9b5e8"]];
var cacheName = 'sw-precache-v3-sw-precache-' + (self.registration ? self.registration.scope : '');


var ignoreUrlParametersMatching = [/^utm_/];



var addDirectoryIndex = function (originalUrl, index) {
    var url = new URL(originalUrl);
    if (url.pathname.slice(-1) === '/') {
      url.pathname += index;
    }
    return url.toString();
  };

var cleanResponse = function (originalResponse) {
    // If this is not a redirected response, then we don't have to do anything.
    if (!originalResponse.redirected) {
      return Promise.resolve(originalResponse);
    }

    // Firefox 50 and below doesn't support the Response.body stream, so we may
    // need to read the entire body to memory as a Blob.
    var bodyPromise = 'body' in originalResponse ?
      Promise.resolve(originalResponse.body) :
      originalResponse.blob();

    return bodyPromise.then(function(body) {
      // new Response() is happy when passed either a stream or a Blob.
      return new Response(body, {
        headers: originalResponse.headers,
        status: originalResponse.status,
        statusText: originalResponse.statusText
      });
    });
  };

var createCacheKey = function (originalUrl, paramName, paramValue,
                           dontCacheBustUrlsMatching) {
    // Create a new URL object to avoid modifying originalUrl.
    var url = new URL(originalUrl);

    // If dontCacheBustUrlsMatching is not set, or if we don't have a match,
    // then add in the extra cache-busting URL parameter.
    if (!dontCacheBustUrlsMatching ||
        !(url.pathname.match(dontCacheBustUrlsMatching))) {
      url.search += (url.search ? '&' : '') +
        encodeURIComponent(paramName) + '=' + encodeURIComponent(paramValue);
    }

    return url.toString();
  };

var isPathWhitelisted = function (whitelist, absoluteUrlString) {
    // If the whitelist is empty, then consider all URLs to be whitelisted.
    if (whitelist.length === 0) {
      return true;
    }

    // Otherwise compare each path regex to the path of the URL passed in.
    var path = (new URL(absoluteUrlString)).pathname;
    return whitelist.some(function(whitelistedPathRegex) {
      return path.match(whitelistedPathRegex);
    });
  };

var stripIgnoredUrlParameters = function (originalUrl,
    ignoreUrlParametersMatching) {
    var url = new URL(originalUrl);
    // Remove the hash; see https://github.com/GoogleChrome/sw-precache/issues/290
    url.hash = '';

    url.search = url.search.slice(1) // Exclude initial '?'
      .split('&') // Split into an array of 'key=value' strings
      .map(function(kv) {
        return kv.split('='); // Split each 'key=value' string into a [key, value] array
      })
      .filter(function(kv) {
        return ignoreUrlParametersMatching.every(function(ignoredRegex) {
          return !ignoredRegex.test(kv[0]); // Return true iff the key doesn't match any of the regexes.
        });
      })
      .map(function(kv) {
        return kv.join('='); // Join each [key, value] array into a 'key=value' string
      })
      .join('&'); // Join the array of 'key=value' strings into a string with '&' in between each

    return url.toString();
  };


var hashParamName = '_sw-precache';
var urlsToCacheKeys = new Map(
  precacheConfig.map(function(item) {
    var relativeUrl = item[0];
    var hash = item[1];
    var absoluteUrl = new URL(relativeUrl, self.location);
    var cacheKey = createCacheKey(absoluteUrl, hashParamName, hash, false);
    return [absoluteUrl.toString(), cacheKey];
  })
);

function setOfCachedUrls(cache) {
  return cache.keys().then(function(requests) {
    return requests.map(function(request) {
      return request.url;
    });
  }).then(function(urls) {
    return new Set(urls);
  });
}

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return setOfCachedUrls(cache).then(function(cachedUrls) {
        return Promise.all(
          Array.from(urlsToCacheKeys.values()).map(function(cacheKey) {
            // If we don't have a key matching url in the cache already, add it.
            if (!cachedUrls.has(cacheKey)) {
              var request = new Request(cacheKey, {credentials: 'same-origin'});
              return fetch(request).then(function(response) {
                // Bail out of installation unless we get back a 200 OK for
                // every request.
                if (!response.ok) {
                  throw new Error('Request for ' + cacheKey + ' returned a ' +
                    'response with status ' + response.status);
                }

                return cleanResponse(response).then(function(responseToCache) {
                  return cache.put(cacheKey, responseToCache);
                });
              });
            }
          })
        );
      });
    }).then(function() {
      
      // Force the SW to transition from installing -> active state
      return self.skipWaiting();
      
    })
  );
});

self.addEventListener('activate', function(event) {
  var setOfExpectedUrls = new Set(urlsToCacheKeys.values());

  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.keys().then(function(existingRequests) {
        return Promise.all(
          existingRequests.map(function(existingRequest) {
            if (!setOfExpectedUrls.has(existingRequest.url)) {
              return cache.delete(existingRequest);
            }
          })
        );
      });
    }).then(function() {
      
      return self.clients.claim();
      
    })
  );
});


self.addEventListener('fetch', function(event) {
  if (event.request.method === 'GET') {
    // Should we call event.respondWith() inside this fetch event handler?
    // This needs to be determined synchronously, which will give other fetch
    // handlers a chance to handle the request if need be.
    var shouldRespond;

    // First, remove all the ignored parameters and hash fragment, and see if we
    // have that URL in our cache. If so, great! shouldRespond will be true.
    var url = stripIgnoredUrlParameters(event.request.url, ignoreUrlParametersMatching);
    shouldRespond = urlsToCacheKeys.has(url);

    // If shouldRespond is false, check again, this time with 'index.html'
    // (or whatever the directoryIndex option is set to) at the end.
    var directoryIndex = 'index.html';
    if (!shouldRespond && directoryIndex) {
      url = addDirectoryIndex(url, directoryIndex);
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond is still false, check to see if this is a navigation
    // request, and if so, whether the URL matches navigateFallbackWhitelist.
    var navigateFallback = '';
    if (!shouldRespond &&
        navigateFallback &&
        (event.request.mode === 'navigate') &&
        isPathWhitelisted([], event.request.url)) {
      url = new URL(navigateFallback, self.location).toString();
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond was set to true at any point, then call
    // event.respondWith(), using the appropriate cache key.
    if (shouldRespond) {
      event.respondWith(
        caches.open(cacheName).then(function(cache) {
          return cache.match(urlsToCacheKeys.get(url)).then(function(response) {
            if (response) {
              return response;
            }
            throw Error('The cached response that was expected is missing.');
          });
        }).catch(function(e) {
          // Fall back to just fetch()ing the request if some unexpected error
          // prevented the cached response from being valid.
          console.warn('Couldn\'t serve response for "%s" from cache: %O', event.request.url, e);
          return fetch(event.request);
        })
      );
    }
  }
});







