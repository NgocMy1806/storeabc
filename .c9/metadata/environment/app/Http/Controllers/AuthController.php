{"filter":false,"title":"AuthController.php","tooltip":"/app/Http/Controllers/AuthController.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":130,"column":5},"end":{"row":145,"column":49},"action":"remove","lines":["  // Step 3: Get the payload","    $config = Configuration::forSymmetricSigner(new Sha256(), new Sha256());","    $token = $config->parser()->parse($encodedJwt);","    $payload = $token->claims()->all();","    dd($payload);","","    // Access the payload data","    $userId = $payload['sub'];","    $expirationTime = $payload['exp'];","","    // You can use the retrieved payload data as needed in your Laravel application","    // For example, you can perform further validation or process the authenticated user","","    // ...","","    return response()->json(['success' => true]);"],"id":127},{"start":{"row":130,"column":5},"end":{"row":144,"column":49},"action":"insert","lines":[" // Step 3: Get the payload","    $config = Configuration::forSymmetricSigner(new Sha256(), new Key($pubKey));","    $token = $config->getParser()->parse($encodedJwt);","    $payload = $token->claims()->all();","","    // Access the payload data","    $userId = $payload['sub'];","    $expirationTime = $payload['exp'];","","    // You can use the retrieved payload data as needed in your Laravel application","    // For example, you can perform further validation or process the authenticated user","","    // ...","","    return response()->json(['success' => true]);"]}],[{"start":{"row":9,"column":0},"end":{"row":13,"column":31},"action":"remove","lines":["use Lcobucci\\JWT\\Parser;","use Lcobucci\\JWT\\ValidationData;","use Lcobucci\\JWT\\Signer\\Key;","use Lcobucci\\JWT\\Signer\\Rsa\\Sha256;","use Lcobucci\\JWT\\Configuration;"],"id":128},{"start":{"row":9,"column":0},"end":{"row":12,"column":37},"action":"insert","lines":["use Lcobucci\\JWT\\Configuration;","use Lcobucci\\JWT\\Signer\\Ecdsa\\Sha256;","use Lcobucci\\JWT\\Signer\\Key;","use Lcobucci\\JWT\\Signer\\Key\\InMemory;"]}],[{"start":{"row":130,"column":0},"end":{"row":137,"column":0},"action":"remove","lines":["    $config = Configuration::forSymmetricSigner(new Sha256(), new Key($pubKey));","    $token = $config->getParser()->parse($encodedJwt);","    $payload = $token->claims()->all();","","    // Access the payload data","    $userId = $payload['sub'];","    $expirationTime = $payload['exp'];",""],"id":129},{"start":{"row":130,"column":0},"end":{"row":136,"column":38},"action":"insert","lines":[" $config = Configuration::forSymmetricSigner(new Sha256(), InMemory::plainText($pubKey));","    $token = $config->getParser()->parse($encodedJwt);","    $payload = $token->claims()->all();","","    // Access the payload data","    $userId = $payload['sub'];","    $expirationTime = $payload['exp'];"]}],[{"start":{"row":129,"column":0},"end":{"row":136,"column":38},"action":"remove","lines":["      // Step 3: Get the payload"," $config = Configuration::forSymmetricSigner(new Sha256(), InMemory::plainText($pubKey));","    $token = $config->getParser()->parse($encodedJwt);","    $payload = $token->claims()->all();","","    // Access the payload data","    $userId = $payload['sub'];","    $expirationTime = $payload['exp'];"],"id":130},{"start":{"row":129,"column":0},"end":{"row":140,"column":0},"action":"insert","lines":["  $config = Configuration::forAsymmetricSigner(","        new Sha256(),","        InMemory::plainText($pubKey),","        InMemory::plainText('') // Passphrase if required, leave empty if not needed","    );","    $token = $config->getParser()->parse($encodedJwt);","    $payload = $token->claims()->all();","","    // Access the payload data","    $userId = $payload['sub'];","    $expirationTime = $payload['exp'];",""]}],[{"start":{"row":129,"column":1},"end":{"row":139,"column":38},"action":"remove","lines":[" $config = Configuration::forAsymmetricSigner(","        new Sha256(),","        InMemory::plainText($pubKey),","        InMemory::plainText('') // Passphrase if required, leave empty if not needed","    );","    $token = $config->getParser()->parse($encodedJwt);","    $payload = $token->claims()->all();","","    // Access the payload data","    $userId = $payload['sub'];","    $expirationTime = $payload['exp'];"],"id":131}],[{"start":{"row":129,"column":1},"end":{"row":129,"column":2},"action":"insert","lines":["s"],"id":132},{"start":{"row":129,"column":2},"end":{"row":129,"column":3},"action":"insert","lines":["t"]},{"start":{"row":129,"column":3},"end":{"row":129,"column":4},"action":"insert","lines":["e"]}],[{"start":{"row":129,"column":3},"end":{"row":129,"column":4},"action":"remove","lines":["e"],"id":133},{"start":{"row":129,"column":2},"end":{"row":129,"column":3},"action":"remove","lines":["t"]},{"start":{"row":129,"column":1},"end":{"row":129,"column":2},"action":"remove","lines":["s"]}],[{"start":{"row":129,"column":1},"end":{"row":129,"column":2},"action":"insert","lines":["/"],"id":134},{"start":{"row":129,"column":2},"end":{"row":129,"column":3},"action":"insert","lines":["/"]},{"start":{"row":129,"column":3},"end":{"row":129,"column":4},"action":"insert","lines":["s"]},{"start":{"row":129,"column":4},"end":{"row":129,"column":5},"action":"insert","lines":["t"]},{"start":{"row":129,"column":5},"end":{"row":129,"column":6},"action":"insert","lines":["e"]},{"start":{"row":129,"column":6},"end":{"row":129,"column":7},"action":"insert","lines":["p"]},{"start":{"row":129,"column":7},"end":{"row":129,"column":8},"action":"insert","lines":["3"]}],[{"start":{"row":129,"column":8},"end":{"row":130,"column":0},"action":"insert","lines":["",""],"id":135},{"start":{"row":130,"column":0},"end":{"row":130,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":130,"column":1},"end":{"row":130,"column":65},"action":"insert","lines":["payload = jwt.decode(encoded_jwt, pub_key, algorithms=['ES256'])"],"id":136}],[{"start":{"row":130,"column":1},"end":{"row":130,"column":2},"action":"insert","lines":["$"],"id":137}],[{"start":{"row":130,"column":23},"end":{"row":130,"column":34},"action":"remove","lines":["encoded_jwt"],"id":138},{"start":{"row":130,"column":23},"end":{"row":130,"column":34},"action":"insert","lines":["$encodedJwt"]}],[{"start":{"row":130,"column":36},"end":{"row":130,"column":43},"action":"remove","lines":["pub_key"],"id":139},{"start":{"row":130,"column":36},"end":{"row":130,"column":43},"action":"insert","lines":["$pubKey"]}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":21},"action":"insert","lines":["use Firebase\\JWT\\JWT;","use Firebase\\JWT\\Key;"],"id":140}],[{"start":{"row":131,"column":66},"end":{"row":131,"column":67},"action":"insert","lines":[";"],"id":141}],[{"start":{"row":131,"column":67},"end":{"row":132,"column":0},"action":"insert","lines":["",""],"id":142},{"start":{"row":132,"column":0},"end":{"row":132,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":132,"column":1},"end":{"row":132,"column":76},"action":"insert","lines":["return (array)JWT::decode($jwt, new Key($this->public_key, $this->signer));"],"id":143}],[{"start":{"row":131,"column":12},"end":{"row":131,"column":22},"action":"remove","lines":["jwt.decode"],"id":144},{"start":{"row":131,"column":12},"end":{"row":131,"column":23},"action":"insert","lines":["JWT::decode"]}],[{"start":{"row":130,"column":8},"end":{"row":131,"column":0},"action":"insert","lines":["",""],"id":145},{"start":{"row":131,"column":0},"end":{"row":131,"column":1},"action":"insert","lines":[" "]},{"start":{"row":131,"column":1},"end":{"row":131,"column":2},"action":"insert","lines":["$"]}],[{"start":{"row":131,"column":2},"end":{"row":131,"column":12},"action":"insert","lines":["algorithms"],"id":146}],[{"start":{"row":131,"column":12},"end":{"row":131,"column":13},"action":"insert","lines":["="],"id":147}],[{"start":{"row":131,"column":13},"end":{"row":131,"column":15},"action":"insert","lines":["''"],"id":148}],[{"start":{"row":131,"column":14},"end":{"row":131,"column":19},"action":"insert","lines":["ES256"],"id":149}],[{"start":{"row":131,"column":20},"end":{"row":131,"column":21},"action":"insert","lines":[";"],"id":150}],[{"start":{"row":133,"column":41},"end":{"row":133,"column":58},"action":"remove","lines":["$this->public_key"],"id":151},{"start":{"row":133,"column":41},"end":{"row":133,"column":48},"action":"insert","lines":["$pubKey"]}],[{"start":{"row":133,"column":50},"end":{"row":133,"column":63},"action":"remove","lines":["$this->signer"],"id":152},{"start":{"row":133,"column":50},"end":{"row":133,"column":61},"action":"insert","lines":["$algorithms"]}],[{"start":{"row":132,"column":12},"end":{"row":133,"column":15},"action":"remove","lines":["JWT::decode($encodedJwt, $pubKey, algorithms=['ES256']);"," return (array)"],"id":153}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":3},"action":"insert","lines":["// "],"id":154}],[{"start":{"row":132,"column":24},"end":{"row":132,"column":28},"action":"remove","lines":["$jwt"],"id":155},{"start":{"row":132,"column":24},"end":{"row":132,"column":35},"action":"insert","lines":["$encodedJwt"]}],[{"start":{"row":132,"column":68},"end":{"row":133,"column":0},"action":"insert","lines":["",""],"id":156},{"start":{"row":133,"column":0},"end":{"row":133,"column":1},"action":"insert","lines":[" "]},{"start":{"row":133,"column":1},"end":{"row":133,"column":2},"action":"insert","lines":["d"]},{"start":{"row":133,"column":2},"end":{"row":133,"column":3},"action":"insert","lines":["d"]}],[{"start":{"row":133,"column":3},"end":{"row":133,"column":5},"action":"insert","lines":["()"],"id":157}],[{"start":{"row":133,"column":4},"end":{"row":133,"column":5},"action":"insert","lines":["$"],"id":158},{"start":{"row":133,"column":5},"end":{"row":133,"column":6},"action":"insert","lines":["p"]},{"start":{"row":133,"column":6},"end":{"row":133,"column":7},"action":"insert","lines":["a"]},{"start":{"row":133,"column":7},"end":{"row":133,"column":8},"action":"insert","lines":["y"]},{"start":{"row":133,"column":8},"end":{"row":133,"column":9},"action":"insert","lines":["l"]},{"start":{"row":133,"column":9},"end":{"row":133,"column":10},"action":"insert","lines":["o"]},{"start":{"row":133,"column":10},"end":{"row":133,"column":11},"action":"insert","lines":["a"]},{"start":{"row":133,"column":11},"end":{"row":133,"column":12},"action":"insert","lines":["d"]}],[{"start":{"row":133,"column":13},"end":{"row":133,"column":14},"action":"insert","lines":[";"],"id":159}],[{"start":{"row":140,"column":0},"end":{"row":140,"column":49},"action":"remove","lines":["    return response()->json(['success' => true]);"],"id":160},{"start":{"row":139,"column":0},"end":{"row":140,"column":0},"action":"remove","lines":["",""]},{"start":{"row":138,"column":10},"end":{"row":139,"column":0},"action":"remove","lines":["",""]},{"start":{"row":138,"column":9},"end":{"row":138,"column":10},"action":"remove","lines":["."]},{"start":{"row":138,"column":8},"end":{"row":138,"column":9},"action":"remove","lines":["."]}],[{"start":{"row":138,"column":7},"end":{"row":138,"column":8},"action":"remove","lines":["."],"id":161},{"start":{"row":138,"column":6},"end":{"row":138,"column":7},"action":"remove","lines":[" "]},{"start":{"row":138,"column":5},"end":{"row":138,"column":6},"action":"remove","lines":["/"]},{"start":{"row":138,"column":4},"end":{"row":138,"column":5},"action":"remove","lines":["/"]},{"start":{"row":138,"column":0},"end":{"row":138,"column":4},"action":"remove","lines":["    "]},{"start":{"row":137,"column":0},"end":{"row":138,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":134,"column":0},"end":{"row":134,"column":39},"action":"insert","lines":[" $userName = $userData->json()['name'];"],"id":162}],[{"start":{"row":134,"column":13},"end":{"row":134,"column":22},"action":"remove","lines":["$userData"],"id":163},{"start":{"row":134,"column":13},"end":{"row":134,"column":21},"action":"insert","lines":["$payload"]}],[{"start":{"row":133,"column":0},"end":{"row":133,"column":3},"action":"insert","lines":["// "],"id":164}],[{"start":{"row":134,"column":38},"end":{"row":135,"column":0},"action":"insert","lines":["",""],"id":165},{"start":{"row":135,"column":0},"end":{"row":135,"column":1},"action":"insert","lines":[" "]},{"start":{"row":135,"column":1},"end":{"row":135,"column":2},"action":"insert","lines":["d"]},{"start":{"row":135,"column":2},"end":{"row":135,"column":3},"action":"insert","lines":["d"]}],[{"start":{"row":135,"column":3},"end":{"row":135,"column":5},"action":"insert","lines":["()"],"id":166}],[{"start":{"row":135,"column":4},"end":{"row":135,"column":13},"action":"insert","lines":["$userName"],"id":167}],[{"start":{"row":135,"column":14},"end":{"row":135,"column":15},"action":"insert","lines":[";"],"id":168}],[{"start":{"row":133,"column":1},"end":{"row":133,"column":2},"action":"remove","lines":["/"],"id":169},{"start":{"row":133,"column":0},"end":{"row":133,"column":1},"action":"remove","lines":["/"]}],[{"start":{"row":133,"column":0},"end":{"row":133,"column":1},"action":"remove","lines":[" "],"id":170},{"start":{"row":133,"column":0},"end":{"row":133,"column":1},"action":"remove","lines":[" "]},{"start":{"row":133,"column":0},"end":{"row":133,"column":1},"action":"remove","lines":["d"]},{"start":{"row":133,"column":0},"end":{"row":133,"column":1},"action":"remove","lines":["d"]}],[{"start":{"row":133,"column":0},"end":{"row":133,"column":1},"action":"insert","lines":["d"],"id":171},{"start":{"row":133,"column":1},"end":{"row":133,"column":2},"action":"insert","lines":["u"]},{"start":{"row":133,"column":2},"end":{"row":133,"column":3},"action":"insert","lines":["m"]},{"start":{"row":133,"column":3},"end":{"row":133,"column":4},"action":"insert","lines":["p"]}],[{"start":{"row":134,"column":21},"end":{"row":134,"column":29},"action":"remove","lines":["->json()"],"id":172}],[{"start":{"row":134,"column":29},"end":{"row":134,"column":41},"action":"insert","lines":["->getValue()"],"id":173}],[{"start":{"row":133,"column":0},"end":{"row":133,"column":3},"action":"insert","lines":["// "],"id":174}],[{"start":{"row":134,"column":40},"end":{"row":134,"column":41},"action":"remove","lines":[")"],"id":175},{"start":{"row":134,"column":39},"end":{"row":134,"column":40},"action":"remove","lines":["("]},{"start":{"row":134,"column":38},"end":{"row":134,"column":39},"action":"remove","lines":["e"]},{"start":{"row":134,"column":37},"end":{"row":134,"column":38},"action":"remove","lines":["u"]},{"start":{"row":134,"column":36},"end":{"row":134,"column":37},"action":"remove","lines":["l"]},{"start":{"row":134,"column":35},"end":{"row":134,"column":36},"action":"remove","lines":["a"]},{"start":{"row":134,"column":34},"end":{"row":134,"column":35},"action":"remove","lines":["V"]},{"start":{"row":134,"column":33},"end":{"row":134,"column":34},"action":"remove","lines":["t"]},{"start":{"row":134,"column":32},"end":{"row":134,"column":33},"action":"remove","lines":["e"]},{"start":{"row":134,"column":31},"end":{"row":134,"column":32},"action":"remove","lines":["g"]},{"start":{"row":134,"column":30},"end":{"row":134,"column":31},"action":"remove","lines":[">"]},{"start":{"row":134,"column":29},"end":{"row":134,"column":30},"action":"remove","lines":["-"]}],[{"start":{"row":134,"column":28},"end":{"row":134,"column":29},"action":"remove","lines":["]"],"id":176},{"start":{"row":134,"column":27},"end":{"row":134,"column":28},"action":"remove","lines":["'"]}],[{"start":{"row":134,"column":22},"end":{"row":134,"column":23},"action":"remove","lines":["'"],"id":177},{"start":{"row":134,"column":21},"end":{"row":134,"column":22},"action":"remove","lines":["["]}],[{"start":{"row":134,"column":21},"end":{"row":134,"column":22},"action":"insert","lines":["-"],"id":178},{"start":{"row":134,"column":22},"end":{"row":134,"column":23},"action":"insert","lines":[">"]}],[{"start":{"row":135,"column":0},"end":{"row":135,"column":15},"action":"remove","lines":[" dd($userName);"],"id":179}],[{"start":{"row":135,"column":0},"end":{"row":137,"column":88},"action":"remove","lines":["","    // You can use the retrieved payload data as needed in your Laravel application","    // For example, you can perform further validation or process the authenticated user"],"id":180},{"start":{"row":134,"column":28},"end":{"row":135,"column":0},"action":"remove","lines":["",""]},{"start":{"row":134,"column":27},"end":{"row":134,"column":28},"action":"remove","lines":[";"]}],[{"start":{"row":134,"column":27},"end":{"row":134,"column":28},"action":"insert","lines":[";"],"id":181}],[{"start":{"row":140,"column":0},"end":{"row":140,"column":48},"action":"remove","lines":["    session()->put('accessToken', $accessToken);"],"id":182},{"start":{"row":139,"column":0},"end":{"row":140,"column":0},"action":"remove","lines":["",""]},{"start":{"row":138,"column":0},"end":{"row":139,"column":0},"action":"remove","lines":["",""]},{"start":{"row":137,"column":0},"end":{"row":138,"column":0},"action":"remove","lines":["",""]},{"start":{"row":136,"column":0},"end":{"row":137,"column":0},"action":"remove","lines":["",""]},{"start":{"row":135,"column":0},"end":{"row":136,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":134,"column":28},"end":{"row":135,"column":0},"action":"remove","lines":["",""],"id":183}],[{"start":{"row":134,"column":28},"end":{"row":135,"column":0},"action":"insert","lines":["",""],"id":184},{"start":{"row":135,"column":0},"end":{"row":135,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":138,"column":0},"end":{"row":139,"column":0},"action":"insert","lines":["",""],"id":185},{"start":{"row":139,"column":0},"end":{"row":140,"column":0},"action":"insert","lines":["",""]},{"start":{"row":140,"column":0},"end":{"row":141,"column":0},"action":"insert","lines":["",""]},{"start":{"row":141,"column":0},"end":{"row":142,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":140,"column":0},"end":{"row":170,"column":17},"action":"insert","lines":[" $userName = $userData->json()['name'];","                $cognitoId = $userData->json()['sub'];","                $userEmail = $userData->json()['email']; // cognito ID","                $customer = Customer::where('email', $userEmail)->first();","","                if (!$customer) {","                    // Customer does not exist, create a new record","                    $customer = Customer::create([","                        'name'=> $userName,","                        'email' => $userEmail,","                        'cognito_id' => $cognitoId, ","                    ]);","                }","                elseif(isset($customer) && $customer->cognito_id ==null)","                {","                    $customer->update([","                        'cognito_id' => $cognitoId,","                    ]);","                }","","                $userId = $customer->id;","                // dd($userId);","                session()->put('userName', $userName);","                session()->put('userId', $userId);","                // Use the access token for further requests or store it in the session","                if (session()->has('previousUrl')) {","                    $previousUrl = session()->pull('previousUrl');","                    return redirect($previousUrl);","                } else {","                    return redirect('/index');","                }"],"id":186}],[{"start":{"row":140,"column":0},"end":{"row":140,"column":39},"action":"remove","lines":[" $userName = $userData->json()['name'];"],"id":187}],[{"start":{"row":141,"column":29},"end":{"row":141,"column":48},"action":"remove","lines":["$userData->json()['"],"id":188},{"start":{"row":141,"column":29},"end":{"row":141,"column":39},"action":"insert","lines":["$payload->"]}],[{"start":{"row":141,"column":43},"end":{"row":141,"column":44},"action":"remove","lines":["]"],"id":189},{"start":{"row":141,"column":42},"end":{"row":141,"column":43},"action":"remove","lines":["'"]}],[{"start":{"row":142,"column":29},"end":{"row":142,"column":38},"action":"remove","lines":["$userData"],"id":190},{"start":{"row":142,"column":29},"end":{"row":142,"column":37},"action":"insert","lines":["$payload"]}],[{"start":{"row":142,"column":39},"end":{"row":142,"column":40},"action":"remove","lines":["j"],"id":191},{"start":{"row":142,"column":39},"end":{"row":142,"column":40},"action":"remove","lines":["s"]},{"start":{"row":142,"column":39},"end":{"row":142,"column":40},"action":"remove","lines":["o"]},{"start":{"row":142,"column":39},"end":{"row":142,"column":40},"action":"remove","lines":["n"]},{"start":{"row":142,"column":39},"end":{"row":142,"column":41},"action":"remove","lines":["()"]},{"start":{"row":142,"column":39},"end":{"row":142,"column":40},"action":"remove","lines":["["]},{"start":{"row":142,"column":39},"end":{"row":142,"column":40},"action":"remove","lines":["'"]}],[{"start":{"row":142,"column":44},"end":{"row":142,"column":45},"action":"remove","lines":["'"],"id":192},{"start":{"row":142,"column":44},"end":{"row":142,"column":45},"action":"remove","lines":["]"]}],[{"start":{"row":141,"column":15},"end":{"row":142,"column":47},"action":"remove","lines":[" $cognitoId = $payload->sub;","                $userEmail = $payload->email; /"],"id":193}],[{"start":{"row":135,"column":1},"end":{"row":136,"column":47},"action":"insert","lines":[" $cognitoId = $payload->sub;","                $userEmail = $payload->email; /"],"id":194}],[{"start":{"row":136,"column":46},"end":{"row":136,"column":47},"action":"remove","lines":["/"],"id":195}],[{"start":{"row":136,"column":13},"end":{"row":136,"column":14},"action":"remove","lines":[" "],"id":196},{"start":{"row":136,"column":12},"end":{"row":136,"column":13},"action":"remove","lines":[" "]},{"start":{"row":136,"column":8},"end":{"row":136,"column":12},"action":"remove","lines":["    "]},{"start":{"row":136,"column":4},"end":{"row":136,"column":8},"action":"remove","lines":["    "]},{"start":{"row":136,"column":0},"end":{"row":136,"column":4},"action":"remove","lines":["    "]},{"start":{"row":135,"column":29},"end":{"row":136,"column":0},"action":"remove","lines":["",""]},{"start":{"row":135,"column":28},"end":{"row":135,"column":29},"action":"remove","lines":[";"]}],[{"start":{"row":135,"column":28},"end":{"row":135,"column":29},"action":"insert","lines":[";"],"id":197}],[{"start":{"row":135,"column":29},"end":{"row":135,"column":31},"action":"remove","lines":["  "],"id":198},{"start":{"row":135,"column":29},"end":{"row":136,"column":0},"action":"insert","lines":["",""]},{"start":{"row":136,"column":0},"end":{"row":136,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":136,"column":1},"end":{"row":136,"column":2},"action":"remove","lines":[" "],"id":199}],[{"start":{"row":135,"column":1},"end":{"row":135,"column":2},"action":"remove","lines":[" "],"id":200}],[{"start":{"row":142,"column":16},"end":{"row":142,"column":17},"action":"remove","lines":[" "],"id":201}],[{"start":{"row":142,"column":16},"end":{"row":142,"column":17},"action":"insert","lines":["/"],"id":202}],[{"start":{"row":137,"column":0},"end":{"row":138,"column":44},"action":"remove","lines":["    session()->put('userName', $userName);","    session()->put('userEmail', $userEmail);"],"id":203}],[{"start":{"row":137,"column":0},"end":{"row":138,"column":0},"action":"remove","lines":["",""],"id":204},{"start":{"row":137,"column":0},"end":{"row":138,"column":0},"action":"remove","lines":["",""]},{"start":{"row":137,"column":0},"end":{"row":138,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":168,"column":0},"end":{"row":170,"column":34},"action":"remove","lines":["","    // Redirect the user to the desired page","    return redirect('/dashboard');"],"id":205}],[{"start":{"row":9,"column":0},"end":{"row":12,"column":37},"action":"remove","lines":["use Lcobucci\\JWT\\Configuration;","use Lcobucci\\JWT\\Signer\\Ecdsa\\Sha256;","// use Lcobucci\\JWT\\Signer\\Key;","use Lcobucci\\JWT\\Signer\\Key\\InMemory;"],"id":206}],[{"start":{"row":24,"column":51},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":207},{"start":{"row":25,"column":0},"end":{"row":25,"column":8},"action":"insert","lines":["        "]},{"start":{"row":25,"column":8},"end":{"row":25,"column":9},"action":"insert","lines":["i"]},{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"insert","lines":["f"]}],[{"start":{"row":25,"column":10},"end":{"row":25,"column":12},"action":"insert","lines":["()"],"id":208}],[{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"insert","lines":["e"],"id":209},{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"insert","lines":["n"]},{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"insert","lines":["v"]}],[{"start":{"row":25,"column":14},"end":{"row":25,"column":16},"action":"insert","lines":["()"],"id":210}],[{"start":{"row":25,"column":15},"end":{"row":25,"column":17},"action":"insert","lines":["''"],"id":211}],[{"start":{"row":25,"column":16},"end":{"row":25,"column":23},"action":"insert","lines":["APP_ENV"],"id":212}],[{"start":{"row":25,"column":26},"end":{"row":25,"column":27},"action":"insert","lines":["="],"id":213},{"start":{"row":25,"column":27},"end":{"row":25,"column":28},"action":"insert","lines":["="]}],[{"start":{"row":25,"column":27},"end":{"row":25,"column":28},"action":"remove","lines":["="],"id":214},{"start":{"row":25,"column":26},"end":{"row":25,"column":27},"action":"remove","lines":["="]}],[{"start":{"row":25,"column":25},"end":{"row":25,"column":26},"action":"insert","lines":["="],"id":215},{"start":{"row":25,"column":26},"end":{"row":25,"column":27},"action":"insert","lines":["="]}],[{"start":{"row":25,"column":27},"end":{"row":25,"column":29},"action":"insert","lines":["''"],"id":216}],[{"start":{"row":25,"column":28},"end":{"row":25,"column":29},"action":"insert","lines":["l"],"id":217},{"start":{"row":25,"column":29},"end":{"row":25,"column":30},"action":"insert","lines":["o"]},{"start":{"row":25,"column":30},"end":{"row":25,"column":31},"action":"insert","lines":["c"]},{"start":{"row":25,"column":31},"end":{"row":25,"column":32},"action":"insert","lines":["a"]},{"start":{"row":25,"column":32},"end":{"row":25,"column":33},"action":"insert","lines":["l"]}],[{"start":{"row":25,"column":35},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":218},{"start":{"row":26,"column":0},"end":{"row":26,"column":8},"action":"insert","lines":["        "]},{"start":{"row":26,"column":8},"end":{"row":26,"column":9},"action":"insert","lines":["{"]}],[{"start":{"row":28,"column":8},"end":{"row":28,"column":11},"action":"remove","lines":["// "],"id":219}],[{"start":{"row":28,"column":35},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":220},{"start":{"row":29,"column":0},"end":{"row":29,"column":8},"action":"insert","lines":["        "]},{"start":{"row":29,"column":8},"end":{"row":29,"column":9},"action":"insert","lines":["}"]}],[{"start":{"row":30,"column":8},"end":{"row":30,"column":40},"action":"remove","lines":["// return redirect('/callback');"],"id":221}],[{"start":{"row":30,"column":8},"end":{"row":30,"column":9},"action":"insert","lines":["e"],"id":222},{"start":{"row":30,"column":9},"end":{"row":30,"column":10},"action":"insert","lines":["l"]},{"start":{"row":30,"column":10},"end":{"row":30,"column":11},"action":"insert","lines":["s"]},{"start":{"row":30,"column":11},"end":{"row":30,"column":12},"action":"insert","lines":["e"]},{"start":{"row":30,"column":12},"end":{"row":30,"column":13},"action":"insert","lines":["{"]}],[{"start":{"row":31,"column":54},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":223},{"start":{"row":32,"column":0},"end":{"row":32,"column":8},"action":"insert","lines":["        "]},{"start":{"row":32,"column":8},"end":{"row":32,"column":9},"action":"insert","lines":["}"]}],[{"start":{"row":30,"column":12},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":224},{"start":{"row":31,"column":0},"end":{"row":31,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":61,"column":11},"end":{"row":62,"column":0},"action":"remove","lines":[" // dump($accessToken);",""],"id":225}],[{"start":{"row":8,"column":0},"end":{"row":14,"column":0},"action":"remove","lines":["use Illuminate\\Support\\Str;","","","use Firebase\\JWT\\JWT;","use Firebase\\JWT\\Key;","",""],"id":226,"ignore":true},{"start":{"row":19,"column":0},"end":{"row":21,"column":0},"action":"remove","lines":["        if(env('APP_ENV')=='local')","        {",""]},{"start":{"row":21,"column":0},"end":{"row":26,"column":0},"action":"remove","lines":["        }","        else","        {","        return redirect()->route('handleALBCallback');","        }",""]},{"start":{"row":27,"column":12},"end":{"row":27,"column":25},"action":"insert","lines":["// dd($code);"]},{"start":{"row":48,"column":11},"end":{"row":49,"column":0},"action":"insert","lines":[" // dump($accessToken);",""]},{"start":{"row":102,"column":4},"end":{"row":102,"column":5},"action":"remove","lines":[" "]},{"start":{"row":105,"column":5},"end":{"row":123,"column":0},"action":"remove","lines":["encodedJwt = $request->header('x-amzn-oidc-data');","","    // Step 1: Get the key ID from JWT headers (the kid field)","    $jwtHeaders = explode('.', $encodedJwt)[0];","    $decodedJwtHeaders = base64_decode($jwtHeaders);","    $decodedJson = json_decode($decodedJwtHeaders, true);","    $kid = $decodedJson['kid'];","","    // Step 2: Get the public key from the regional endpoint","    $region = 'us-east-1';","    $url = \"https://public-keys.auth.elb.$region.amazonaws.com/$kid\";","    $response = Http::get($url);","    $pubKey = $response->body();",""," //step3"," $algorithms='ES256';"," $payload = JWT::decode($encodedJwt, new Key($pubKey, $algorithms));","// dump($payload);",""]},{"start":{"row":105,"column":5},"end":{"row":108,"column":3},"action":"insert","lines":["userData = json_decode(base64_decode($request->header('x-amzn-oidc-data')), true);","","    // Extract user details from the user claims","   "]},{"start":{"row":108,"column":17},"end":{"row":108,"column":26},"action":"remove","lines":["payload->"]},{"start":{"row":108,"column":17},"end":{"row":108,"column":27},"action":"insert","lines":["userData['"]},{"start":{"row":108,"column":31},"end":{"row":108,"column":33},"action":"insert","lines":["']"]},{"start":{"row":109,"column":1},"end":{"row":110,"column":0},"action":"remove","lines":["$cognitoId = $payload->sub;",""]},{"start":{"row":109,"column":1},"end":{"row":109,"column":3},"action":"insert","lines":["  "]},{"start":{"row":109,"column":18},"end":{"row":109,"column":27},"action":"remove","lines":["payload->"]},{"start":{"row":109,"column":18},"end":{"row":109,"column":28},"action":"insert","lines":["userData['"]},{"start":{"row":109,"column":33},"end":{"row":109,"column":35},"action":"insert","lines":["']"]},{"start":{"row":109,"column":36},"end":{"row":109,"column":37},"action":"remove","lines":[" "]},{"start":{"row":111,"column":4},"end":{"row":131,"column":12},"action":"remove","lines":["           //cognito ID","                $customer = Customer::where('email', $userEmail)->first();","","                if (!$customer) {","                    // Customer does not exist, create a new record","                    $customer = Customer::create([","                        'name'=> $userName,","                        'email' => $userEmail,","                        'cognito_id' => $cognitoId, ","                    ]);","                }","                elseif(isset($customer) && $customer->cognito_id ==null)","                {","                    $customer->update([","                        'cognito_id' => $cognitoId,","                    ]);","                }","","                $userId = $customer->id;","                // dd($userId);","            "]},{"start":{"row":111,"column":4},"end":{"row":113,"column":0},"action":"insert","lines":["// Store the user information in the session or perform any other necessary actions","    session()->put('accessToken', $accessToken);",""]},{"start":{"row":114,"column":0},"end":{"row":114,"column":12},"action":"remove","lines":["            "]},{"start":{"row":114,"column":24},"end":{"row":114,"column":26},"action":"remove","lines":["Id"]},{"start":{"row":114,"column":24},"end":{"row":114,"column":29},"action":"insert","lines":["Email"]},{"start":{"row":114,"column":37},"end":{"row":115,"column":62},"action":"remove","lines":["Id);","                // Use the access token for further requests o"]},{"start":{"row":114,"column":37},"end":{"row":116,"column":23},"action":"insert","lines":["Email);","","    // Redirect the use"]},{"start":{"row":116,"column":25},"end":{"row":116,"column":26},"action":"remove","lines":["s"]},{"start":{"row":116,"column":27},"end":{"row":124,"column":0},"action":"remove","lines":["re it in the session","                if (session()->has('previousUrl')) {","                    $previousUrl = session()->pull('previousUrl');","                    return redirect($previousUrl);","                } else {","                    return redirect('/index');","                }","",""]},{"start":{"row":116,"column":27},"end":{"row":117,"column":34},"action":"insert","lines":[" the desired page","    return redirect('/dashboard');"]}],[{"start":{"row":6,"column":24},"end":{"row":9,"column":21},"action":"insert","lines":["","use Illuminate\\Support\\Str;","use Firebase\\JWT\\JWT;","use Firebase\\JWT\\Key;"],"id":227,"ignore":true},{"start":{"row":22,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["        if(env('APP_ENV')=='local')","        {",""]},{"start":{"row":26,"column":0},"end":{"row":31,"column":0},"action":"insert","lines":["        }","        else","        {","        return redirect()->route('handleALBCallback');","        }",""]},{"start":{"row":37,"column":12},"end":{"row":37,"column":25},"action":"remove","lines":["// dd($code);"]},{"start":{"row":58,"column":11},"end":{"row":59,"column":0},"action":"remove","lines":[" // dump($accessToken);",""]},{"start":{"row":111,"column":4},"end":{"row":111,"column":5},"action":"insert","lines":[" "]},{"start":{"row":114,"column":5},"end":{"row":117,"column":3},"action":"remove","lines":["userData = json_decode(base64_decode($request->header('x-amzn-oidc-data')), true);","","    // Extract user details from the user claims","   "]},{"start":{"row":114,"column":5},"end":{"row":132,"column":0},"action":"insert","lines":["encodedJwt = $request->header('x-amzn-oidc-data');","","    // Step 1: Get the key ID from JWT headers (the kid field)","    $jwtHeaders = explode('.', $encodedJwt)[0];","    $decodedJwtHeaders = base64_decode($jwtHeaders);","    $decodedJson = json_decode($decodedJwtHeaders, true);","    $kid = $decodedJson['kid'];","","    // Step 2: Get the public key from the regional endpoint","    $region = 'us-east-1';","    $url = \"https://public-keys.auth.elb.$region.amazonaws.com/$kid\";","    $response = Http::get($url);","    $pubKey = $response->body();",""," //step3"," $algorithms='ES256';"," $payload = JWT::decode($encodedJwt, new Key($pubKey, $algorithms));","// dump($payload);",""]},{"start":{"row":132,"column":14},"end":{"row":132,"column":24},"action":"remove","lines":["userData['"]},{"start":{"row":132,"column":14},"end":{"row":132,"column":23},"action":"insert","lines":["payload->"]},{"start":{"row":132,"column":27},"end":{"row":132,"column":29},"action":"remove","lines":["']"]},{"start":{"row":133,"column":1},"end":{"row":133,"column":3},"action":"remove","lines":["  "]},{"start":{"row":133,"column":1},"end":{"row":134,"column":0},"action":"insert","lines":["$cognitoId = $payload->sub;",""]},{"start":{"row":134,"column":15},"end":{"row":134,"column":25},"action":"remove","lines":["userData['"]},{"start":{"row":134,"column":15},"end":{"row":134,"column":24},"action":"insert","lines":["payload->"]},{"start":{"row":134,"column":29},"end":{"row":134,"column":31},"action":"remove","lines":["']"]},{"start":{"row":134,"column":30},"end":{"row":134,"column":31},"action":"insert","lines":[" "]},{"start":{"row":136,"column":4},"end":{"row":138,"column":0},"action":"remove","lines":["// Store the user information in the session or perform any other necessary actions","    session()->put('accessToken', $accessToken);",""]},{"start":{"row":136,"column":4},"end":{"row":156,"column":12},"action":"insert","lines":["           //cognito ID","                $customer = Customer::where('email', $userEmail)->first();","","                if (!$customer) {","                    // Customer does not exist, create a new record","                    $customer = Customer::create([","                        'name'=> $userName,","                        'email' => $userEmail,","                        'cognito_id' => $cognitoId, ","                    ]);","                }","                elseif(isset($customer) && $customer->cognito_id ==null)","                {","                    $customer->update([","                        'cognito_id' => $cognitoId,","                    ]);","                }","","                $userId = $customer->id;","                // dd($userId);","            "]},{"start":{"row":157,"column":0},"end":{"row":157,"column":12},"action":"insert","lines":["            "]},{"start":{"row":157,"column":36},"end":{"row":157,"column":41},"action":"remove","lines":["Email"]},{"start":{"row":157,"column":36},"end":{"row":157,"column":38},"action":"insert","lines":["Id"]},{"start":{"row":157,"column":46},"end":{"row":159,"column":23},"action":"remove","lines":["Email);","","    // Redirect the use"]},{"start":{"row":157,"column":46},"end":{"row":158,"column":62},"action":"insert","lines":["Id);","                // Use the access token for further requests o"]},{"start":{"row":158,"column":64},"end":{"row":158,"column":65},"action":"insert","lines":["s"]},{"start":{"row":158,"column":67},"end":{"row":159,"column":34},"action":"remove","lines":[" the desired page","    return redirect('/dashboard');"]},{"start":{"row":158,"column":67},"end":{"row":166,"column":0},"action":"insert","lines":["re it in the session","                if (session()->has('previousUrl')) {","                    $previousUrl = session()->pull('previousUrl');","                    return redirect($previousUrl);","                } else {","                    return redirect('/index');","                }","",""]},{"start":{"row":192,"column":1},"end":{"row":193,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":39},"end":{"row":11,"column":39},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1686044341667,"hash":"4d776a85151bd3ef6f2afa65c3ab095d624a6bfd"}