data = {
  results: [
    {
      gender: "female",
      name: {
        title: "Ms",
        first: "Svetlana",
        last: "Radanović",
      },
      location: {
        street: {
          number: 1862,
          name: "Porodice Milosavljević",
        },
        city: "Priboj",
        state: "North Bačka",
        country: "Serbia",
        postcode: 65848,
        coordinates: {
          latitude: "60.9551",
          longitude: "100.1637",
        },
        timezone: {
          offset: "+3:00",
          description: "Baghdad, Riyadh, Moscow, St. Petersburg",
        },
      },
      email: "svetlana.radanovic@example.com",
      login: {
        uuid: "d9f82aa7-9943-4740-af0c-2a7bc3dca8bb",
        username: "silvercat668",
        password: "78945612",
        salt: "MqlDqaN9",
        md5: "b4a41e7eea403b42e9d56238aa59c145",
        sha1: "fabac895e2575f8044b798160b1d7e874530664c",
        sha256:
          "f1bf7d60f4dfbbed95481f0243b108edc53bdf35200975a149ea9a82a28779b0",
      },
      dob: {
        date: "1972-01-15T05:29:16.946Z",
        age: 52,
      },
      registered: {
        date: "2016-12-27T04:11:58.871Z",
        age: 7,
      },
      phone: "018-7656-726",
      cell: "065-1239-189",
      id: {
        name: "SID",
        value: "638673753",
      },
      picture: {
        large: "https://randomuser.me/api/portraits/women/73.jpg",
        medium: "https://randomuser.me/api/portraits/med/women/73.jpg",
        thumbnail: "https://randomuser.me/api/portraits/thumb/women/73.jpg",
      },
      nat: "RS",
    },
  ],
  info: {
    seed: "1bc2623e303b1103",
    results: 1,
    page: 1,
    version: "1.4",
  },
};

console.log(data.results[0].name.title);
console.log(data.results[0].name.first);
console.log(data.results[0].name.last);