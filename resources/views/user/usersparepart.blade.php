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

    <header class="bg-transparent absolute top-0 left-0 w-full items-end z-10">
        <div class="container">
            <div class="w-32 border-1 ">
                <div> Search for a part...</div>
                <div class="bg-slate-400"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="10" cy="10" r="7"></circle>
                        <line x1="21" y1="21" x2="15" y2="15"></line>
                    </svg></div>
            </div>
        </div>

    </header>

    <Section id="banner" class="bg-gradient-to-r bg-gradient-to-r from-ijo to-white ">
        <div class="px-10">
            <h1 class="text-4xl  py-10 text-left font-bold text-white">Compare Part</h1>
            <p class="w-1/2 text-white font-bold pb-28">The comparison function is to find out whether there are differences in variables between one group and another. Comparison is an observation that aims to find ut and/or test the differences between two or more groups.</p>
        </div>
    </Section>

    <section id="card text-center">
        <div class="container mx-auto">
            <h1 class="py-12 text-6xl text-center font-bold text-green-800">Categories</h1>
            <div class="flex flex-wrap ">

                <div class="w-full p-10 md:w-1/2 md:p-30 lg:w-1/3 lg:p-40 xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl p-5 hover:bg-ijo duration-500 transition ease-in-out shadow-md group  ">
                        <div class="flex justify-center"><svg width="85" height="85" viewBox="0 0 85 85" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="85" height="85" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_349_37" transform="scale(0.01)" />
                                    </pattern>
                                    <image id="image0_349_37" width="100" height="100" xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg></div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">The system is designed to use pressure and friction to stop.</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 md:p-30 lg:w-1/3 lg:p-40 xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl p-5 hover:bg-ijo duration-500 transition ease-in-out shadow-md group  ">
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
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">The system is designed to use pressure and friction to stop.</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 md:p-30 lg:w-1/3 lg:p-40 xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl p-5 hover:bg-ijo duration-500 transition ease-in-out shadow-md group  ">
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
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">The system is designed to use pressure and friction to stop.</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 md:p-30 lg:w-1/3 lg:p-40 xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl p-5 hover:bg-ijo duration-500 transition ease-in-out shadow-md group  ">
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
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">The system is designed to use pressure and friction to stop.</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 md:p-30 lg:w-1/3 lg:p-40 xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl p-5 hover:bg-ijo duration-500 transition ease-in-out shadow-md group  ">
                        <div class="flex justify-center"></div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">The system is designed to use pressure and friction to stop.</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 md:p-30 lg:w-1/3 lg:p-40 xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl p-5 hover:bg-ijo duration-500 transition ease-in-out shadow-md group  ">
                        <div class="flex justify-center"></div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">The system is designed to use pressure and friction to stop.</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 md:p-30 lg:w-1/3 lg:p-40 xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl p-5 hover:bg-ijo duration-500 transition ease-in-out shadow-md group  ">
                        <div class="flex justify-center"></div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">The system is designed to use pressure and friction to stop.</h4>
                        </div>
                    </div>
                </div>
                <div class="w-full p-10 md:w-1/2 md:p-30 lg:w-1/3 lg:p-40 xl:w-1/4 ">
                    <div class="border-2 border-ijo bg-slate-50 rounded-3xl p-5 hover:bg-ijo duration-500 transition ease-in-out shadow-md group  ">
                        <div class="flex justify-center"></div>
                        <div class="text-center">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">The system is designed to use pressure and friction to stop.</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</body>

</html>