<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Document</title>
</head>

<body>

    <header class="bg-white fixed  w-full  z-10 py-3 shadow-md">
        <div class="flex justify-end">
            <div class="flex border-2 border-ijo shadow-sm rounded-lg  ">
                <div class="rounded-lg">
                    <form action="">
                        <input type="text" placeholder="Search for a part..." class="px-2 py-1 border-none rounded-lg">
                    </form>
                </div>
                <div class="content-center py-1 bg-slate-300 border rounded-r-lg px-2 "><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="10" cy="10" r="7"></circle>
                        <line x1="21" y1="21" x2="15" y2="15"></line>
                    </svg></div>
            </div>
        </div>
    </header>

    <Section id="banner" class="bg-gradient-to-r from-green-600 to-ijo">
        <div class="px-10 pt-8">
            <div class="container mx-auto">
                <h1 class="text-4xl  py-10 text-left font-bold text-white uppercase">Compare Part</h1>
                <p class="w-3/4 md:w-1/2 lg:1/4 text-white font-bold pb-28 ">The comparison function is to find out whether there are differences in variables between one group and another. Comparison is an observation that aims to find ut and/or test the differences between two or more groups.</p>
            </div>
        </div>
    </Section>

    <section id="card text-center">
        <div class="container mx-auto">
            <h1 class="py-12 text-6xl text-center font-bold text-green-800">Categories</h1>
            <div class="flex flex-wrap ">

                <div class="w-full p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-10 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group">
                        <div class="flex justify-center"><svg width="85" height="85" viewBox="0 0 85 85" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="85" height="85" fill="#E5E5E5" />
                                <g id="Sparepart" clip-path="url(#clip0_0_1)">
                                    <rect width="1440" height="1024" transform="translate(-307 -484)" fill="white" />
                                    <g id="4. Brakes">
                                        <rect id="Rectangle 26" x="-48" y="-24" width="181" height="200" rx="15" fill="white" stroke="#8FD79F" stroke-width="2" />
                                        <rect id="Brake Discs" width="85" height="85" fill="url(#pattern0)" />
                                    </g>
                                </g>
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_0_1" transform="scale(0.01)" />
                                    </pattern>
                                    <clipPath id="clip0_0_1">
                                        <rect width="1440" height="1024" fill="white" transform="translate(-307 -484)" />
                                    </clipPath>
                                    <image id="image0_0_1" width="100" height="100" xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">The system is designed to use pressure and friction to stop.</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-10 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group">
                        <div class="flex justify-center"><svg width="87" height="87" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="87" height="87" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_350_48" transform="scale(0.01)" />
                                    </pattern>
                                    <image id="image0_350_48" width="100" height="100" xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>
                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Chassis and
                                Suspension</h1>
                            <h4 class="group-hover:text-slate-100">Dampen various vibrations generated from the road surface</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-10 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group">
                        <div class="flex justify-center"><svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="90" height="90" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_469_36" transform="scale(0.0111111)" />
                                    </pattern>
                                    <image id="image0_469_36" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAACNElEQVR4nO3cQU7bQBjF8ddSkiug5nxFVKKciUrtTUoTVrCCU7RdpKsKiS7sKBFSbM83Mw9j/3+SV1jzRi9W8MTySAAAAAAAAACAoKWkK0kbSX/bYyPpS/s3sgpYSbqX9HzkuGvPISvDsmcyh5PKvQKmmjXI1YDJ7I5LsuJuEya0JitumzChLVmN94EJPSWc+y8w/iSzIkU/Jpz7EBh/klmRor8mnHsdGH8OWYOcSrpR//fYRtKCrDwf28Bjk/kp6YysMhYdEyr9ib/5rHeZk3quNO7ksiL/DBFA0SYUbULRJhRtQtEmFG1C0SYUbULRJhRtQtEmFG1C0Sa1fiadKn4mHTuKNqFoE4o2oWiTD5XGfRMPTANZYVzRJhRtQtEmFG1C0SYUbULRJhRtQtEmFG1C0SYUbULRJhRtklN014szNV7gcWWNSt9rYpv2nBJW6n4hfl0wa+dYltXQFx9vlb+vxamad/uGZJW8skdR9EXHRF4e55lZnxOyPmVmHRpF0UOusN1xk5m1Tsj6kZl1aBRF/+mYyMvjtzHrV2bWoeJFR+46Uh7ongTGj2bVetBcRKTolL0qcvfQcGZVFSn6W8K53wPjv1bW6CzVbEnW9515p/xbLmfWjnMnhV4rdRdQetM/V5ZzITbYQs3+b2s1u2Zt1dz6XarOErx21kLDtmSz7kAzRc6F2Kw5F2KzVnUhxu/Re1UXYhS9V3VxRNF7s14cOb3G4mi2nIuj2XMuxAAAAAr7D5CRC7S1PSnIAAAAAElFTkSuQmCC" />
                                </defs>
                            </svg>

                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Drivetrain</h1>
                            <h4 class="group-hover:text-slate-100">Dampen various vibrations generated from the road surface</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-10 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group">
                        <div class="flex justify-center"><svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="72" height="72" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_469_37" transform="scale(0.0111111)" />
                                    </pattern>
                                    <image id="image0_469_37" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAABtUlEQVR4nO3cQU7DMBSE4QEhboO4Wzcs2YZLcRsKhygqC2ipimM19vP0Rfyf5A2iyXjU4LSOkAAAAAAAALDEvaQXSVtJb5Kmn5+RJ9gkaX82JvLE2+rvxN7/W56b0SfQ90Sude6Sq+S5HXlw/KJok96iT1fw8797hzFn7vd77gSy5QlTWsGjRsudQLY8YWrvnN7RcieQLc9R70pbuxQjLM2XLc8Ri6EJRZvcDTru2i/58Dy8o00o2oSiTSjahKJNKNqEok0o2oSiTSjahKJNWoo+3cWYs/S73jmX7G5kyxNm5C5Gy+5GtjxhRu5itOxuZMtT1LJjULu0RprLmi1PEYuhCUWbULQJRZtQtAlFm1C0CUWbULQJRZtQtAlFm1C0CUWbULQJRZtQtAlFm1C0CUWbtBT9GZ6i75zZ8hS1FP3R8JpetYdjsuUpain6teE1vWrnzJYnzKOknXwPq+wkPawoT6iNYUKHsVlhnlBPQcFr43nFeUKNnFzLpLLlCTVicj2TypYnVOTkIiaVLU/of8baBx0nKlOqPHwEN6FoE4o2oWgTijahaBOKNqFoAAAAAAAALPYFF29btTQAhhwAAAAASUVORK5CYII=" />
                                </defs>
                            </svg>

                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Electronics</h1>
                            <h4 class="group-hover:text-slate-100">help to keep your car running at its full potential</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-10 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group">
                        <div class="flex justify-center"><svg width="87" height="87" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="87" height="87" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_350_48" transform="scale(0.01)" />
                                    </pattern>
                                    <image id="image0_350_48" width="100" height="100" xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>
                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Exhaust</h1>
                            <h4 class="group-hover:text-slate-100">Find all kinds of exhaust</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-10 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group">
                        <div class="flex justify-center"><svg width="110" height="110" viewBox="0 0 110 110" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="110" height="110" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_328_82" transform="scale(0.01)" />
                                    </pattern>
                                    <image id="image0_328_82" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAAEpElEQVR4nO2cS4gdRRSGP2dwJnExjproxomIARcB8yBLFXWCGFBURAQ16lZdqEhAIYEsXRiJioL7+IjPERfJStEsxGx8ixEVnZkYjI+buPBFzHVRfaFvVfW7+vbtnv+DA0N31+lz6r9VXadv3QEhhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhOgytwG/AT8AzwHXAJMjvP9NwHGgX9GWgO0jjLs2fJ1xnNGJs+y5f1lbrDnWkZCVZN3ihBJjYOPEBPAg8CPZcX9PNMKLJFuHOF0VZAtwhGKxL+M5mHc+DzVnV+3QcRNkBngGOE3xD5NXkEngWuB54OcMB78DsxUT6JIgdwDHKC5E6pQVZwK4Enia5JGzp2ISXZiyLgMO5ozvxSxneROaBLYB71jX96g2StosyDSwG/grZ2yL5OirognNYkQINUqWPDGUtVEue+eBowlx/Amcso79B1yXx3GZT9geq02VUbId05EhxLihZAxFuAjYnxLHQcxS94x1/Mm8NygjyLmYB3qoUZLGODwjAM4C7gF+9cTUB36Kzq+J/o6f+wJYlfdGZRO2R8lJ4LwC7fMyDoJsBD70xDKYil7ALHcBXrXO/w1cUeRm9g025Wzne5a00dLqqRlgH8k1xUfA5tj193mueTRHXw7hu9HHwEPA2oy29ihpq/kWA7eTXFP0gPsxZcGAS3Ef5O9a1+QirZD5F1gAbgbO9rSdLdkB42gDsmqK/ZgHe5xJ4LB1XQ+Y8/RZJjeSXZH3gROY4WtPaU13ZCibBnZhlqy+80dJXrY+7rn+zoRrczEF3Aq8jRkVWcHHp7SkT9q4Y8f9tedYH1P07cYI5mML8I/V5uWQgV4IPAJ8mhBg3HzitYU8o+YQsD7Fx2rgK6vNIvWsNgHYADxBvimtS4IMaoosnrXa5a7GqzIF3IJ5wGdNaUlDe9zwxX4a8yJ1JqXdgOtxq/G9tUSawVrgYeAT/ElNNRFUCb5lOO4jmOdBHi7AXZ1+RoFqPOKqyIKxCVeQtjAPfBPZAxSrF15jOOfC1XjEociC0lZBynIvbs6Fq3FMhT+Y8rYGi46VJcgc7kvVDyi3v+DNmI83QgUIK0eQCeB9hnPtAetK+FqPWZHFV2dpy+tCrBRBHsPNtWw1vtfjK/f3JVmsBEE241bjr5f0tRqzU9Tutx5wTuVIPY67xirMF0zxHJcoX43vwO2zge2oGiwep11jH241Pl/B3wLJgixUijSiy4JsI3w1/gvJgpyo6Bs8TrvC+bg7Yj6neDVu8wfJgpys6Bs8TrvCK7jV+MYAft8iWZADAfx3UpC7cfPaGcj35bjFZR+zm+XiEDfomiDrcDdvvEeJ78ZTmMPsTjkV2QECiQHdEmQCszHBntcvaTKoonRJkJ24+dzVaEQl6IogG3A3TZetxhulC4JM4+4hWMYsfVtHFwR5iuEczjCajdu10HZBrmb4VXgfI1BrabMgs7i/kP0S80a2tbRZkJeopxpvlKTXAG20UNV4ozTdiaHsMKP9lyK1EfI3gk1Z66rxNEL9RrAp+44Rbf8UQgghhBBCCCGEEEIIIYQQQgghRHn+B+Jx+8WXmLu6AAAAAElFTkSuQmCC" />
                                </defs>
                            </svg>

                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Engine Oil</h1>
                            <h4 class="group-hover:text-slate-100">Find perfect oil for your car</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-10 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group">
                        <div class="flex justify-center"><svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="80" height="80" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_350_58" transform="scale(0.01)" />
                                    </pattern>
                                    <image id="image0_350_58" width="100" height="100" xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Wheels and
                                Tyres</h1>
                            <h4 class="group-hover:text-slate-100">To help you choose, wheels and tyres</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-10 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group">
                        <div class="flex justify-center"><svg width="87" height="87" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="87" height="87" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_350_48" transform="scale(0.01)" />
                                    </pattern>
                                    <image id="image0_350_48" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAAFz0lEQVR4nO2dW2gcVRjHf0mskdrUa5VqYkrVoiT1XitWK1ovlYq1XlEs2IDgg4gXguCDFYtXFPTBJxGqQhEFU7EgKK0Qtdpi0tYHra2UNPWGl9ZqYxrbZH34dulmdnZnzuyZmbMz3w8Oy85l/2fPf+bMnDnfOQOKoiiKoiiKoiiKoihKFVrSzkCRE4GzgVbg7wR1ZwBnAVMS1nWWJcCXwARQKKafgKeAY2PUvQsYLNMsAENAL3JQ5JIXmVwg3rQNmGlZsxl4I0D3C+B4y7rO8yC1C6WUNiKFaIuVIXXXWdR0nunAPsIVTAG415LuacCoge5iS7pG2Dz6wnIjlVXCb8BLwOc+299tSXcZcIxn2R6k6hyIUdd5nqbyaLyhuO5oYNizbsiS7ms+uhcX100D/vKs+9qSrhFpnCEFn2Wjxc/DwKGYdJt8lh0sfh4qagdtHztHpaC5w2fZauQIvgKY7Vm33ZLuTp9l7yJ3XYuBkzzrvrek6zxtwAHCX1zvs6TbCYwb6N5sSbcheIxwhbIFaUXb4pWQup+SUpWVFmEaaLuAWZZ1W4G1AbrfAKdY1nWebuQuplbB/A48bElvAfBDgJ437QUesqTvPN7nSNXSBHCRBb2dIfW8aRw4x4J+aNK47W0BLgi5bRNwfp16U5EnulFoBubWqW8smDRNmF0w6+0iqPc/JtpFkUY7xI8fkcfwM5G2SNzsBjaXfb8cOD0B3UBcMeQr4E7gJpIx5DNgedn3PhwxJI0qS6mBGuIYaohjqCGOoYY4hhriGK7c9ibNhcDzZd+70sqIl7wa0oVDJpSThyrLr8s4yf2NyIMhI8DPdezv1+UcG3kwBOABzGN3C0ho0hb72alOXq4hHyKB1e0G+/wJ7I8nO9XJiyEA/yHdwk6TJ0PCMguJcrwMCdJ7hgSHKqghQhdiwjIqu4zPBG5PKiN5NaQJuAS4tZjm1Nh2SXH7RG5/82RIC7AQOQtuATpC7leKVkmEPBjSjYQTLQVONtx3EOixnqMapGHIeT7L2oE78A/5mYMEuI1F0DoDGfTTZrDPANKl2wd8G0GzoXicaPFRm5ChCqYsD/Hbh4F+5CzqjPa3GpNm4B+iGVIAbougOa/Kb40BHwH3k8Ow0RLTiG5GARmXGIVeJCx0P/AecA9wXIj92pAgu8ySliEmnAs8wZG44xFgRQK6qeBnSD9yMS+lzT7bxGlIqT3yLPBdFd0RMnqm+BnytmebPp9tbBvSAlwFvIpEMIYJ+J5hSTuQPLRDQG6bFyGNwqWYFfA6ZGhEIuTBkBXAy8AJhvsNA2uAVdZzVIOsG9IBvE74CPbtSLX5PtJATLT7FrJvSDvBZgwgBvQhF/ZUybohg0inVPlQ63FkgpnS45HdKeSrKlk3ZAy4GngUGYfeD3yATOXhJFk3BOTibGvwaOzkwRCQi/tzmA3g3Au8AKyPJUdVyIsh7yDD1kxZgEw9WE9clxF5iMtqRQIWojAVmG8xL4HkwZAp1Pc/E52DMS9VlpcDTL7TOpV4J90MTR7OED/WIuE9pfRJutk5Ql4NcRY1xDHUEMdQQxxDDXEMNcQx0m6HdCLBDSWSmgAmLd1A0jbkymLKi24gWmU5RpKG/IuEkkYl6hPXenV/qWNf5+ll8stbwqaN1PeQL6ruBtx5C1FsdCMX1LeoXRhDSBzuddiZTNlU91rSv8YmxkJkVGzQEbo6I7pO04xMdB+22rimwXWdZxH+BbADCWz2Ll8To+4EEhx3MEZdI9K47Z3ns6wXGbo2F+k8KsfGzNbVdHuQwIf5VL63xJauEWkY4vcGtI+Ln7uofM9HmME19epuA36NSdeINAzZ47NsJTIdeA+VU4sPx6i7ColqfITKYdK2dJ1nNmYvVnmywXUbgjcJVyh/IK9lbXRd55kObKV2oYwijcIs6DYEbchbdvyqka3ApRnTDYUL71nqAK5HZl3Yh0wSsAlpI2RRV1EURVEURVEURVGUhuF/6C6D/0JcxvMAAAAASUVORK5CYII=" />
                                </defs>
                            </svg>
                        </div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Tools</h1>
                            <h4 class="group-hover:text-slate-100">Tools for repairing and maintenance your car</h4>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section>


</body>

</html>